@extends('layouts.master')

@section('head')

<link rel="stylesheet" href="/css/about.css">
@stop

@section('content')

<section id="screens">
            <div class="container">

                <div class="section-heading scrollpoint sp-effect3">
                    <h1>The Dev Team <i class="fa fa-users"></i></h1>
                    <div class="divider"></div>
                    <p>Meet the wonderful team behind Party Planner</p>
                </div>

                <div class="devs slider filtering scrollpoint sp-effect5" >
                    <div class="one">
                        <img src="img/freeze/screens/placeholder.png" alt="">
                        <h4>Max Mayfield</h4>
                    </div>
                    <div class="two">
                        <img src="img/freeze/screens/placeholder.png" alt="">
                        <h4>Keyasha Brothern</h4>
                    </div>
                    <div class="three">
                        <img src="img/freeze/screens/placeholder.png" alt="">
                        <h4>Benito Cardenas</h4>
                    </div>
                </div>
            </div>
        </section>

@stop