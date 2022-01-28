<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class WelcomeController extends Controller
{
    //
    function index()
    {

        return view('/login',);
    }
}
