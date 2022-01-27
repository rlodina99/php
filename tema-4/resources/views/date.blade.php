@extends('master')
@section("content")

<h1>Date personale</h1>
<br><br>

<h3>Nume prenume: {{Session::get('user')['name']}}</h3>

<h3>Adresa email: {{Session::get('user')['email']}}</h3>
<br><br><br><br><br><br>


<h4> Pentru resetare parola apasati  

     <a href="/Razvan/php/tema-4/public/reset">aici</a>
</h4>



     
@endsection