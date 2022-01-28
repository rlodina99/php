@extends('master')
@section('content')


<div style="text-align:center">

<p align="center"><a href="/Razvan/php/proiect/public/pagina" target="_blank"><img src="http://www.dezmembraricorunca.ro/logocorunca.png" width="500"></a></p>

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="marca" method="POST">
                @csrf
                
                <div class="form-group">
                    <label style="font-size:20px" for="marca1">Adaugare cat. de marca</label>
                    <input type="text" name="marca1" class="form-control" id="marca1" placeholder="marca">
                </div>
                <button type="submit" class="btn btn-default">Introduceti</button>
            </form>
        </div>
    </div>
</div>
@endsection