@extends('layouts.master')

<<<<<<< HEAD
{{-- @include('parties.create') --}}

@include('parties.show')
=======
@section('head')
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="/css/partyplanner.css">

@stop
@section('content')
<div class="container">
    @include('parties.create')
</div>
@stop
>>>>>>> master
