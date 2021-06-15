
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistema de Farmacia</title>
@extends('layouts.app')

@section('content')





<div class="container" >
<div class="alert alert- primary success" role="alert"class="btn btn -success" style=" align:right;font-weight: bolder; ">
 @if (Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif   

    
</div>

<H2 align="center"><strong>Pacientes</strong></H2>
<table class="table table-light">
<a align="right" href="{{url('pacientes/create')}}" class="btn btn -success" style="background-color:#0066FF;border-radius: 20px; align:right;font-weight: bolder; "> Registrar Nuevo Paciente</a>
 <br>
 <br>
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th><strong>Nombre</strong></th>
            <th><strong>Apellido1</strong></th>
            <th><strong>Apellido2</strong></th>
            <th><strong>Num de Id</strong></th>
            <th><strong>Correo</strong></th>
            <th><strong>Telefono</strong></strong></th>
            <th><strong>Fecha de Naciemiento</strong></th>
            <th><strong>Acciones</strong></th>
      </tr>
    </thead>
    

    <tbody>

        @foreach ($pacientes as $paciente)
        <tr>
            
                <td>{{ $paciente-> id }}</td>
                <td>{{ $paciente-> Nombre }}</td>
                <td>{{ $paciente-> Apellido1 }}</td>
                <td>{{ $paciente-> Apellido2 }}</td>
                <td>{{ $paciente-> NumeroIdentificacion }}</td>
                <td>{{ $paciente-> Correo }}</td>
                <td>{{ $paciente-> Telefono }}</td>
                <td>{{ $paciente-> FechadeNacimento }}</td>
                <td>
                    
                <a href="{{url('/pacientes/'.$paciente -> id.'/edit')}}"class="btn btn -success" style="background-color:#28b463;font-weight: bolder; ">
                    
                   Editar&nbsp;  
                </a>
                
                <form action="{{url('/pacientes/'.$paciente -> id)}}" method="post" >
                    @csrf
                    {{method_field('DELETE')}}
                     <br>
                    <input type="submit"  class="btn btn -success" style="background-color:#CC0033;font-weight: bolder;;" onclick="return confirm ('Quieres Borrar?')"     value=" Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

</head>