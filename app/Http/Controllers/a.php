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
		$surveys = Surveys::all();
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
    	$test = $this->getNumber();
    	$survey = Surveys::find($id);
    	if(!$survey)
    		abort(404);

    	return view('survey/edit',['survey' => $survey , 'test' => $test ]);
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

	public function getAnswer(){
	 $table="answers";
	        $primary="id_answer";
	        $prefix="SRV-";
	        $kodeBarang=Autonumber::autonumber($table,$primary,$prefix);
	        return $kodeBarang;
	} 



    public function simpan(request $request, $id)
	{
		$answers = new Answers;
		$questions = new Questions;
		$survey = Surveys::find($id);



		$questions->question = $request->question;
		$questions->id_question = $request->id_question;
		$questions->save();
		

		$rules = [];

        foreach($request->input('answer') as $key => $value) {
            $rules["answer.{$key}"] = 'required';
        }


        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            foreach($request->input('answer') as $key => $value) {
                Answers::create(['answer'=>$value]);


            }
			
            return response()->json(['success'=>'done']);
                

        }

        return response()->json(['error'=>$validator->errors()->all()]);
    	

		
       return redirect('survey/'. $survey->id .'/edit');
	}

    

}

