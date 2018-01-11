<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get("addmore","HomeController@addMore");
Route::post("addmore","HomeController@addMorePost");

Route::get("/free_survey","QuestsController@addMore");
Route::post("/free_survey","QuestsController@addMorePost");

Route::get('/free_survey/create','QuestsController@create');
Route::post('/free_survey','QuestsController@store');

Route::get('/register','RegistController@index');

Route::get('/forgot_password','ForgotpController@index');

Route::get('/login','LoginController@index');



Route::get('/survey','SurveyController@index');
Route::get('/survey/create','SurveyController@create');
Route::post('/survey','SurveyController@store');
Route::get('/survey/{id}/edit','SurveyController@edit');
Route::post('/survey/{id}/edit','SurveyController@simpan');
Route::get('/survey/{id}/question','SurveyController@question');
Route::get('/survey/{id}/question/{id_question}/details','SurveyController@details');
Route::delete('/survey/{id_question}','SurveyController@destroy');



// Route::get('/survey','ProfileController@index');

// Route::get('/survey/create','ProfileController@create');
// Route::post('/survey','ProfileController@store');


// Route::get("/survey/{id}/edit","ProfileController@addMore");
// Route::post("/survey/{id}/edit","ProfileController@addMorePost");
// Route::get('/survey/{id}/edit','ProfileController@edit');
// Route::post('/survey/{id}/edit','ProfileController@editMorePost');

Route::put('/survey/{id}','ProfileController@update');

Route::get('/profile','dprofileController@index');