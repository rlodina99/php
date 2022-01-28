@extends('master')
@section("content")


<p align="center"><a href="/Razvan/php/proiect/public/pagina" target="_blank"><img src="https://piese-auto-dezmembrari.ro/piese-auto-dezmembrari.ro/image-fondue.png
" width="500"></a></p><br>





<table class="table">
    <thead class="thead-dark">
        <th scope="col">Idx</th>
        <th scope="col">Marca</th>
        <th scope="col">Categorie</th>
        <th scope="col">Denumire</th>
        <th scope="col">Pret</th>
        <th scope="col">Data adaugare</th>

        @foreach($data['prod2'] as $produs )

        <tr>

            <td>{{$produs['id']}}</td>

            @foreach($data['prod'] as $marca )
            @if($marca['id'] == $produs['id_marca'])
            <td>{{$marca['denumire']}}</td>
            @endif
            @endforeach


            @foreach($data['prod1'] as $categorie )
            @if($categorie['id'] == $produs['id_piesa'])
            <td>{{$categorie['denumire']}}</td>
            @endif
            @endforeach


            <td>{{$produs['denumire']}}</td>

            <td>{{$produs->pret}}</td>

            <td>{{$produs->data}}</td>

        </tr>





        @endforeach

        </tbody>
</table>






@endsection