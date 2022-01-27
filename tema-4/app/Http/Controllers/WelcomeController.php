<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
    function index()
    {

        return view('login');
    }
}
