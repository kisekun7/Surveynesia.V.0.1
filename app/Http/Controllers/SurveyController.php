<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use AutoNumberHelper;

use App\Models\Surveys;
use App\Models\Answers;
use App\Models\Questions;
use App\Helpers\AutoNumber;
use Validator;

class SurveyController extends Controller
{
    
	public function index()
	{

		// $surveys = Surveys::all();
		$surveys = DB::table('surveys')
    			->join('questions','surveys.id_survey' , '=' , 'questions.id_survey')
    			->select(DB::raw('count(*) as count, surveys.survey_title'))
    			->groupBy('surveys.id')
    			->get();
		return view('survey/home',['surveys' => $surveys]);
	}

	public function show($id)
	{

	}

	public function create()
	{
		$ksurvey = $this->getSurvey();
		return view('survey/create',['ksurvey' => $ksurvey]);
	}

	public function store(request $request)
	{
		$surveys = new Surveys;
		$surveys->id_survey = $request->id_survey;
    	$surveys->survey_title = $request->survey_title;
    	$surveys->category = $request->category;
    	$surveys->description = $request->description;

    	

    	$surveys->save();

       return redirect('survey/'. $surveys->id .'/edit');
	}

	public function edit($id)
    {	
    	$quest = $this->getNumber();
    	$survey = Surveys::find($id);

    	if(!$survey)
    		abort(404);

    	return view('survey/edit',['survey' => $survey , 'quest' => $quest ]);
    }

    

    // public function AutoKode()
    // {
    // 	$invoice = new Questions();
    // 	$lastInvoiceID = $invoice->OrdeyBy('Questions', 'DESC')->pluck('Questions')->first();
    // 	$expId = explode('SU-' , $lastInvoiceID);
    // 	$newInvoiceID = $expId[1] + 1;
    // 	return "SU-".$newInvoiceID;
    // }

	public function getNumber(){
	 $table="questions";
	        $primary="id_question";
	        $prefix="QS-";
	        $kodeBarang=Autonumber::autonumber($table,$primary,$prefix);
	        return $kodeBarang;
	} 

	public function getSurvey(){
	 $table="surveys";
	        $primary="id_survey";
	        $prefix="SRV-";
	        $kodeBarang=Autonumber::autonumber($table,$primary,$prefix);
	        return $kodeBarang;
	} 

	


    public function simpan(request $request, $id)
	{
		$answers = new Answers;
		$questions = new Questions;
		$surveynesia = new Surveys;
		


		$questions->question = $request->question;
		$questions->id_question = $request->id_questions;
		$questions->id_survey = $request->id_survey;
		$questions->save();
		$surveyid = DB::table('surveys')->select('id')->orderBy('id','desc')->limit('1')->first();
		$ab = $surveyid->id;

		$rules = [];
		$rule = [];

        foreach($request->input('answer') as $key => $value) {
        	$rules["answer.{$key}"] = 'required';     
        }

        foreach($request->input('id_question') as $key => $value) {
        	$rul["id_question.{$key}"] = 'required';     
        }

        $validator = Validator::make($request->all(), $rules,$rule);

        if ($validator->passes()) {

           
            // foreach($request->answer as $key => $value) {
            //     Answers::create(['id_question'=>$value,'answer'=>$value]);
            // }
            for($i=0; $i < count($request->input('answer')); $i++){
                $name = $request->answer[$i];
                $name2 = $request->id_question[$i];
                Answers::create([
                    'answer'=>$name,
                    'id_question'=>$name2
                ]);
            }

            return response()->json(['success'=>'done' , 'id'=>$ab]);
                
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    	
	}

	public function question($id_question)
    {
    	
    	$query1 = DB::table('surveys')->select('survey_title')->orderBy('survey_title','desc')->limit('1')->first();
		$survey_title = $query1->survey_title;
		$query2 = DB::table('surveys')->select('id')->orderBy('id','desc')->limit('1')->first();
		$id = $query2->id;
    	$questions = Questions::orderBy('id_survey','desc')->get();
    	$query = DB::table('surveys')
            ->join('questions', 'questions.id_survey', '=', 'surveys.id_survey')
            ->select('surveys.id_survey','surveys.survey_title', 'questions.question','surveys.id', 'questions.id_question')
            ->where('surveys.id',$id)
            ->get();
    	return view('survey/question',['survey_title' => $survey_title , 'query' => $query]);
    }

    public function details($id , $id_question)
    {	
    	$surveys = Surveys::find($id);
    	$sql = DB::table('questions')
    		->join('answers','answers.id_question','=','questions.id_question')
    		->select('questions.question','answers.answer')
    		->where('questions.id_question',$id_question)
    		->get();

   		// $data = DB::table('answers')
     //            ->join('questions','questions.id_question','=','answers.id_question')
     //            ->select('questions.id_question','questions.question')
     //            ->groupBy('questions.question','questions.id_question')
     //            ->get();
    	// 	$sql = DB::table('answers')
     //        ->join('questions','questions.id_question','=','answers.id_question')
     //        ->select('questions.question','answers.answer')
     //        ->where('questions.id_question',$data[0]->id_question)
     //        ->get();
    		// $data = DB::table('questions')
      //           // ->join('answers','answers.id_question','=','questions.id_question')
      //           ->select('id_question')
      //           ->groupBy('id_question')
      //           ->get();

    		// $sql = DB::table('answers')
      //       // ->join('questions','questions.id_question','=','answers.id_question')
      //       ->select('id_question')
      //       ->where('id_question',$data[0]->id_question)

      //       ->get();

			// $data = DB::table("answers")->select('id_question')->groupBy("id_question")->get();

			// $sql = Answers::where('id_question', $data[0]->id_question)->first(); 
    		// $sql = DB::table('answer')->select('id_question')->groupBy('id_question');

    	
			$question = Questions::find($id);
			return view('survey.detail', compact('sql'));
	
        
    }


    public function destroy($id_question)
    {	
    	$surveyid = DB::table('surveys')->select('id')->orderBy('id','desc')->limit('1')->first();
		$ab = $surveyid->id;
    	$question = Questions::where('questions.id_question',$id_question);
    	$answer = Answers::where('answers.id_question',$id_question);
    	$question->delete();
    	$answer->delete();

    	return redirect('survey/'. $ab .'/question');
    }

    public function finish()
	{
	  
       return redirect('survey');
	}

    

}

