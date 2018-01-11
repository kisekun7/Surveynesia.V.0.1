<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Quests;
use App\Models\Answer;

use Validator;

class ProfileController extends Controller
{
    //
    public function index()
    {
    	$quests = Quests::all();
    	return view('profile/home',['quests' => $quests]);

    }

    public function show($id)
    {

    	// $blog = Blog::findOrFail($id);
    	$quest = Quests::find($id);
    	if(!$quest)
    		abort(404);

    	return view('profile/single',['quest'=> $quest]);
    }

    public function create()
    {
    	return view('profile/create');
    }

    public function store(Request $request)
    {
    	
    	$quest = new Quests;
    	$quest->survey_title = $request->survey_title;
    	$quest->description = $request->description;
    	$quest->save();

       return redirect('survey/'. $quest->id .'/edit');
    	// return redirect('survey/'. $quest->id .'/edit');
    	
    }

    public function addMore($id)
    {
        $quest = Quests::find($id);
        if(!$quest)
            abort(404);

        return view('profile/edit',['quest' => $quest]);
    }

     public function addMorePost(Request $request)
    {
        $rules = [];

        foreach($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            foreach($request->input('name') as $key => $value) {
                Answer::create(['name'=>$value]);
            }

            return response()->json(['success'=>'done']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);

    }

    // public function edit($id)
    // {

    //     $quest = Quests::find($id);
    //     if(!$quest)
    //         abort(404);

    //     return view('profile/edit',['quest' => $quest]);
    // }

    // public function editMorePost(Request $request)
    // {
    //     $rules = [];

    //     foreach($request->input('name') as $key => $value) {
    //         $rules["name.{$key}"] = 'required';
    //     }

    //     $validator = Validator::make($request->all(), $rules);

    //     if ($validator->passes()) {

    //         foreach($request->input('name') as $key => $value) {
    //             Answer::create(['name'=>$value]);
    //         }

    //         return response()->json(['success'=>'done']);
    //     }

    //     return response()->json(['error'=>$validator->errors()->all()]);
    // }


     public function update(Request $request, $id)
    {
        $quests = Quests::find($id);
        $quests->survey_title = $request->survey_title;
        $quests->description  = $request->description;
        $quests->save();

        return redirect('survey/' . $id . '/edit');

    }


}
