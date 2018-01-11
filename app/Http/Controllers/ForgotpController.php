<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Regist;

class ForgotpController extends Controller
{
    public function index()
    {
    	return view('forgot_password/forgot_password');
    }
}
