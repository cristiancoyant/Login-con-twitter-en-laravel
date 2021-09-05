@extends('layout.plantilla')
@section('titled', 'Borrar Tweets')
   
@section('content')
<div class="container">  

    <form id="contact" action="" method="GET">
      <h3>Cristian Delete</h3>
      <h4> Podes Borrar Los Tweets que quieras</h4>
      <fieldset>
          <label for="nombre">Cuenta de Twitter</label>
        <input  type="text" tabindex="1" required autofocus value="{{$usuario->name}}" readonly>
      </fieldset>
      <fieldset>
          <label for="parametro">Borrar Tweet segun tu busqueda</label>
       <input type="text" placeholder="Buscar Tweet" tabiindex="1" autofocus>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Borrar</button>
       
      </fieldset>
      
    </form>
  </div>
        
        @endsection