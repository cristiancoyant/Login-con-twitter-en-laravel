@extends('layout.plantilla')
@section('titled', 'Home')
   
@section('content')
<form id="contact" action="" method="GET" align="center">
    <h3>Cristian Delete</h3>
    <h4> Podes Borrar Los Tweets que quieras</h4>
    <fieldset>
      <a href="{{route('login.twitter')}}" id="contact-submit" >Login With Twitter</a>
    </fieldset>
    
  </form>
        
        @endsection