@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="reset" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Parola veche</label>
                    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Parola noua</label>
                    <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Password">
                </div>
                <button href="/Razvan/php/proiect/public/login" type="submit" class="btn btn-default">Resetare parola</button>
            </form>
        </div>
    </div>
</div>
@endsection