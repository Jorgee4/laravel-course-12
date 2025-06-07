@extends('master') {{--
    Esta vista extiende la plantilla maestra 'master'.
    Aquí puedes definir el contenido específico de la vista 'contact'.
    Utiliza @section('content') para definir el contenido que se mostrará en la sección principal.--}}

@section('content')
    <h1>Contact1</h1>
    <p>Este es el contenido de la vista de contacto.</p>
    <p>Esta vista muestra información de contacto.</p>

    <p>{{$posts[0]}}</p>
@endsection

{{-- 
    Aquí se define el contenido específico de la vista 'contact'.
    Puedes agregar más contenido, como formularios de contacto, información de contacto, etc.
    Este contenido se mostrará en la sección principal de la plantilla maestra. --}}