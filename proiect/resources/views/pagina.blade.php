@extends('master')
@section("content")

<div style="text-align:center;font-size:40px"> Cauta piesa auto in depozitul de dezmembrari </div>

<p align="center"><a href="/Razvan/php/proiect/public/pagina" target="_blank"><img src="https://piese-auto-dezmembrari.ro/piese-auto-dezmembrari.ro/image-fondue.png
" width="500"></a></p>

<br><br>


<div style="text-align:center">


  <div class="container custom-login">

    <form action="cautare" method="POST">

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

          @csrf

          <button type="submit" class="btn btn-default">Verifica</button>

        </div>
      </div>
    </form>


  </div>
</div>



@endsection