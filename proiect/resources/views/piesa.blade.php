@extends('master')
@section('content')


<div style="text-align:center">

<p align="center"><a href="/Razvan/php/proiect/public/pagina" target="_blank"><img src="http://www.dezmembraricorunca.ro/logocorunca.png" width="500"></a></p>

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="piesa" method="POST">
                @csrf
                
                <div class="form-group">
                    <label style="font-size:20px" for="piesa1">Adaugare cat. de piese</label>
                    <input type="text" name="piesa1" class="form-control" id="piesa1" placeholder="piesa">
                </div>
                <button type="submit" class="btn btn-default">Introduceti</button>
            </form>
        </div>
    </div>
</div>
@endsection