@extends('app')
@auth
<nav class="">
    <div class="container d-flex ">
        <h5 class="text-nav mt-3">CURHATO</h5>
            <ul class="list-unstyled d-flex justify-content-between list-nav">
            <li><a class="link-nav" href="{{ route('home') }}">Home</a></li>
                <li><a class="link-nav" href="#">Fitur</a></li>
                <li><a class="link-nav" href="#">Service</a></li>
                <li><a class="link-nav" href="{{ route('logout') }}">Logout</a></li>
                <div class="fa fa-user-circle-o mt-1">{{ Auth::user()->username }}</b>
            </ul>
    </div>
</nav>  
@endauth
@guest
<nav class="fixed-top">
        <div class="container d-flex ">
            <h5 class="text-nav mt-3">CURHATO</h5>
            <ul class="list-unstyled d-flex justify-content-end list-nav">
                <a class="button-log" href="{{ route('login') }}">Sign In</a>
                <a class="button-sign" href="{{ route('register') }}">Sign Up</a>
            </ul>
        </div>
    </nav>
@endguest