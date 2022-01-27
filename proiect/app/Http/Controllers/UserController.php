<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    
    function login(Request $req)
    {
        $user =  User::where(['email' => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Email sau parola incorect!');window.location.href='/Razvan/php/proiect/public/login';</script>");
        } else {
            $req->session()->put('user', $user);
            return redirect('/pagina');
        }
    }

    function register(Request $req)
    {

        //return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        echo ("<script LANGUAGE='JavaScript'>window.alert('Inregistrarea a avut succes! Va rog introduceti datele pt logare.');window.location.href='/Razvan/php/proiect/public/login';</script>");
    }

    function reset(Request $req)
    {

        $user =  User::where(['email' => $req->email])->first();
        

        if (!$user || !Hash::check($req->password1, $user->password)) {
       
            //echo '<script>alert("parola veche sau mail-ul nu potrivesc")</script>';
            echo ("<script LANGUAGE='JavaScript'>window.alert('parola veche sau mail-ul nu potrivesc');window.location.href='/Razvan/php/proiect/public/reset';</script>");
            
        }
        else{
            $user->password = Hash::make($req->password2);
            $user->save();
            session()->forget('user');
            session()->flush();
            //echo '<script>alert("Parola a fost schimbata cu succes!")</script>';
            echo ("<script LANGUAGE='JavaScript'>window.alert('Parola a fost schimbata cu succes!');window.location.href='/Razvan/php/proiect/public/login';</script>");
        }

      
    }
}
