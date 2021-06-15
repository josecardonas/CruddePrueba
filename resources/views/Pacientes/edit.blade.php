<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Editar paciente/Sistema de Farmacia</title>
@extends('layouts.app')

@section('content')


<div class="container" >
  <H2 align="center"><strong>Editar Paciente</strong></H2>
    <table class="table table-light"> 
  


<form action="{{url('/pacientes/'.$paciente->id)}}" method="post" enctype="multipart/form-data" >
    @csrf

    {{method_field('PATCH')}}
    
        <label for="Nombre"> <strong> Nombre</strong> </label>
        <br>
        <input type="text" name="Nombre" value="{{isset($paciente-> Nombre)?$paciente-> Nombre:''}}" id="Nombre"required  >
        <br>
        <label for="Apellido1">  <strong>Apellido1 </strong></label>
        <br>
        <input type="text" name="Apellido1" value="{{isset($paciente-> Apellido1)?$paciente-> Apellido1:''}}" id="Apellido1" required>
        <br>
        <label for="Apellido2"> <strong>Apellido2 </strong></label>
        <br>
        <input type="text" name="Apellido2" value="{{isset($paciente-> Apellido2)?$paciente-> Apellido2:''}}"id="Apellido2" required>
        <br>
        <label for="NumeroIdentificacion">  <strong>Numero de Identificacion</strong></label>
        <br>
        <input type="text"  name="NumeroIdentificacion" value="{{isset($paciente-> NumeroIdentificacion)?$paciente-> NumeroIdentificacion:''}}"  
        id="NumeroIdentificacion" required pattern="[V,E]{1}[0-9]{8}]">
        <br>
        <label for="Correo">  <strong>Correo</strong></label>
        <br>
        <input type="email" name="Correo" value="{{isset($paciente-> Correo)?$paciente-> Correo:''}}"  id="Correo >
         id="Correo"  >
        <br>
        <label for="Telefono">  <strong>Telefono</strong></label>
        <br>
        <input type="tel" name="Telefono" value="{{isset($paciente->Telefono)?$paciente-> Telefono:''}}" id="Telefono"
        required pattern="[0-9]{11}]">
        <br>
        <label for="Fechadenacimento">  <strong>Fecha de Naciemento</strong></label>
        <br>
        <input type="date" name="FechadeNacimento" value="{{isset($paciente-> FechadeNacimento)?$paciente-> FechadeNacimento:''}}" id="FechadeNacimento" >
        <br><br>
        <input type="submit" class="btn btn -success"  style="background-color:    #28b463   ;border-radius: 20px " value="  Editar Datos  "> 
       &nbsp;
       
        <a href="{{url('pacientes/')}}" class="btn btn -success" style="background-color:    #28b463   ;border-radius: 20px "> Volver</a>
    <thead class="thead-light">
        </form>
      </table>
    </div>

        @endsection


      