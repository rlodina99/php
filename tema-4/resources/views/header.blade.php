<?php

use App\Http\Controllers\WelcomeController;

?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->

    <ul class="nav navbar-nav navbar-right">
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/Razvan/php/tema-4/public/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a href="/Razvan/php/tema-4/public/login">Login</a></li>
      <li><a href="/Razvan/php/tema-4/public/register">Register</a></li>
      @endif
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>