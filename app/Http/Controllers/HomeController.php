<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TagList;
use Validator;

class HomeController extends Controller
{

    public function addMore()
    {
        return view("addMore");
    }

    public function addMorePost(Request $request)
    {
        $rules = [];

        foreach($request->input('answer') as $key => $value) {
            $rules["answer.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            foreach($request->input('answer') as $key => $value) {
                TagList::create(['answer'=>$value]);
            }

            return response()->json(['success'=>'done']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }
}