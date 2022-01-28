<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;


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

            echo ("<script LANGUAGE='JavaScript'>window.alert('parola veche sau mail-ul nu potrivesc');window.location.href='/Razvan/php/proiect/public/reset';</script>");
        } else {
            $user->password = Hash::make($req->password2);
            $user->save();
            session()->forget('user');
            session()->flush();

            echo ("<script LANGUAGE='JavaScript'>window.alert('Parola a fost schimbata cu succes!');window.location.href='/Razvan/php/proiect/public/login';</script>");
        }
    }


    function marca(Request $req)
    {

        $marcaMasina = $req->marca1;

        $rows = DB::select("SELECT id from marca where denumire='$marcaMasina'");

        if (count($rows) > 0) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Marca $marcaMasina este deja inregistrata in baza de date, va rog introduceti alta!');window.location.href='/Razvan/php/proiect/public/marca';</script>");
        } else {

            // adauga in tabel marca
            DB::insert("insert into marca (denumire) values('$marcaMasina')");
            echo ("<script LANGUAGE='JavaScript'>window.alert('Marca $marcaMasina a fost inregistrata cu succes!');window.location.href='/Razvan/php/proiect/public/pagina';</script>");
        }
    }

    function piesa(Request $req)
    {

        $piesaMasina = $req->piesa1;

        $rows = DB::select("SELECT id from piesa where denumire='$piesaMasina'");

        if (count($rows) > 0) { //==cauta cat. piesa in tabel

            echo ("<script LANGUAGE='JavaScript'>window.alert('Categoria $piesaMasina este deja inregistrata in baza de date, va rog introduceti alta!');window.location.href='/Razvan/php/proiect/public/piesa';</script>");
        } else {

            // adauga in tabel cat. piesa
            DB::insert("insert into piesa (denumire) values('$piesaMasina')");
            echo ("<script LANGUAGE='JavaScript'>window.alert('Categoria $piesaMasina a fost inregistrata cu succes!');window.location.href='/Razvan/php/proiect/public/pagina';</script>");
        }
    }

    function adaugprodus(Request $req)
    {

        DB::insert("insert into produs (id_marca,id_piesa,denumire,pret,data) values ('$req->marca','$req->piese','$req->nume1','$req->pret1','2022-01-28')");
            echo ("<script LANGUAGE='JavaScript'>window.alert('Produsul $req->nume1 a fost adaugat cu succes!');window.location.href='/Razvan/php/proiect/public/adaugprodus';</script>");
    }

    public function cautare(Request $req)
    {

    

        $idMarca = $req->marca;
        $idPiesa = $req->piese;
        
        $rows = DB::select("SELECT id from produs where id_marca='$idMarca' AND  id_piesa='$idPiesa' ");

        
        if (count($rows) > 0) { //==cauta cate nr de produse sunt pt cerinta
            $nr = count($rows);
    
            echo ("<script LANGUAGE='JavaScript'>window.alert(' S-au gasit $nr piese conform cautarii');window.location.href='/Razvan/php/proiect/public/cautare';</script>");
        } else {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Nu s-a gasit piese conform cautarii !');window.location.href='/Razvan/php/proiect/public/pagina';</script>");
        }
        
        //return redirect('/cautare');
    }

   


}
