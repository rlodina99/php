@extends('master')
@section("content")

<p align="center"><a href="/Razvan/php/proiect/public/pagina" target="_blank"><img src="http://www.dezmembraricorunca.ro/logocorunca.png" width="500"></a></p>

<br>

<div style="text-align:center">


    <div class="container custom-login">
        <form action="adaugprodus" method="POST"> 

            <label style="font-size:20px" for="marca">Alegeti marca masinii:</label>
            <select id="marca" name="marca">
                @foreach($data['prod'] as $cat)
                <option value="{{$cat->id}}">{{$cat->denumire}}</option>
                @endforeach
            </select>
            <br><br>

            <p></p>
            <label style="font-size:20px" for="piese">Alegeti categoria piesei:</label>
            <select id="piese" name="piese">
                @foreach($data['prod1'] as $cat)
                <option value="{{$cat->id}}">{{$cat->denumire}}</option>
                @endforeach
            </select>
            <p></p>
            <br> 


            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    @csrf

                    <div class="form-group">
                        <label style="font-size:20px" for="nume1">Denumirea Piesei</label>
                        <input type="text" name="nume1" class="form-control" id="nume1" placeholder="denumire">
                    </div>
                    <div class="form-group">
                        <label style="font-size:20px" for="pret1">Pret ( lei ) </label>
                        <input type="number" name="pret1" class="form-control" id="pret1" placeholder="pret">
                    </div>
                    <button type="submit" class="btn btn-default">Adaugare</button>

                </div>
            </div>
        </form>
    </div>




    @endsection