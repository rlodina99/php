<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ProductCat;
use App\Providers\ProductCat1;
use App\Providers\ProductCat2;
use App\Http\Controllers\UserController;


class TestController3 extends Controller
{
    
    public function prodfunct(){

        $prod = ProductCat::all();
        $prod1 = ProductCat1::all();
        $prod2 = ProductCat2::all();


        $data = array('prod'=>$prod, 'prod1'=> $prod1, 'prod2'=> $prod2);
        return view('cautare',['data'=>$data]);

    }


}
