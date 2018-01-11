<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Regist;

class RegistController extends Controller
{
    public function index()
    {
    	return view('register/regist');
    }
}
