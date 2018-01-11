<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Quests;
use App\TagList;
use Validator;

class QuestsController extends Controller
{
    public function addMore()
    {
    	return view('free_survey/quests');
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
                TagList::create(['name'=>$value]);
            }

            return response()->json(['success'=>'done']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function create()
    {
    	return view('blog/create');
    }

    public function store(Request $request)
    {
    	$blog = new Quests;
    	$blog->survey_title = $request->survey_title;
    	$blog->category = $request->category;
        $blog->description = $request->description;
        $blog->username = $request->username;
        $blog->password = $request->password;
        $blog->passwords = $request->passwords;
        $blog->job_potition = $request->job_potition;
        $blog->company = $request->company;
        $blog->email = $request->email;
        $blog->phone_number = $request->phone_number;

    	$blog->save();
        
        return redirect('home');

    	
    }
}
