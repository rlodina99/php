<?php

use App\Http\Controllers\WelcomeController;

?>



<nav class="navbar navbar-default">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->



    <ul class="nav navbar-nav navbar-left navbar-right ">
      @if(Session::has('user'))
      <div class="navbar-header">
      
        <a class="navbar-brand" href="/Razvan/php/proiect/public/adaugprodus">Adaugare produs</a>
      </div>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adaugare categorie
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/Razvan/php/proiect/public/marca">Marca</a></li>
          <li><a href="/Razvan/php/proiect/public/piesa">Piese</a></li>

        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Meniu
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/Razvan/php/proiect/public/pagina">Pagina principala</a></li>
          <li><a href="/Razvan/php/proiect/public/date">Date personale</a></li>
          <li><a href="/Razvan/php/proiect/public/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a href="/Razvan/php/proiect/public/login">Login</a></li>
      <li><a href="/Razvan/php/proiect/public/register">Register</a></li>
      @endif
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>