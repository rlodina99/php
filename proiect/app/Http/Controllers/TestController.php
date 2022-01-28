<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Providers\ProductCat;
use App\Providers\ProductCat1;

class TestController extends Controller
{
    
    public function prodfunct(){

        $prod = ProductCat::all();
        $prod1 = ProductCat1::all();
        $data = array('prod'=>$prod, 'prod1'=> $prod1);
        return view('adaugprodus',['data'=>$data]);

    }


}
