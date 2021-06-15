<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nuevo paciente/Sistema de Farmacia</title>

  @if(count($errors)>0)

      <div class="alert alert-danger" role="alert">
        <ul>
     
          
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
       </ul>
  </div>
   @endif




    
@extends('layouts.app')

@section('content')

<div class="container">
<H2 align="center"><strong>Registrar Nuevo Paciente</strong></H2><br>
  <table class="table table-light"  >


<form action="{{url('/pacientes/')}}" method="post" enctype="multipart/form-data"  >
@csrf
    <label for="Nombre">  Nombre </label>&nbsp;
    <input type="text" name="Nombre" id="Nombre" required>
    <br>
    <label for="Apellido1">  Apellido1 </label>&nbsp;
    <input type="text" name="Apellido1" id="Apellido1" required>
    <br>
    <label for="Apellido2"> Apellido2 </label>&nbsp;
    <input type="text" name="Apellido2" id="Apellido2" required>
    <br>
    <label for="NumeroIdentificacion">  Numero de Identificacion</label>&nbsp;
    <input type="text" name="NumeroIdentificacion" id="NumeroIdentificacion" required pattern="[0-9]{11}]" >
    <br>
    <label for="Correo">  Correo</label>&nbsp;
    <input type="mail" name="Correo" id="Correo"  required>
    <br>
    <label for="Telefono">  Telefono</label>&nbsp;
    <input type="tel" name="Telefono" id="Telefono" required pattern="[0-9]{11}]">
    <br>
    <label for="Fechadenacimento">  Fecha de Nacimento</label>&nbsp;
    <input type="date" name="FechadeNacimento" id="FechadeNacimento" required>
    <br>

    <input type="submit" value="Guardar Datos" class="btn btn -success" style="background-color:    #0066FF   ;border-radius: 20px ">
    &nbsp;
        <a href="{{url('pacientes/')}}" class="btn btn -success" style="background-color:    #0066FF   ;border-radius: 20px "> Volver</a>
    <thead class="thead-light">
        </form>
    
    </form>
  </table>
</div>
    @endsection

</head>