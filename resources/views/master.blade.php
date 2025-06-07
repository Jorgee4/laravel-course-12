<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantilla maestra</title>
</head>
<body>
    
    <header></header>
        <h1>Encabezado de la plantilla maestra</h1>
    </header>

    <main>
        @yield('content') 
        {{-- Aquí se mostrará el contenido de las vistas que extiendan esta plantilla --}}
        {{-- Puedes usar @section('content') en las vistas hijas para definir el contenido --}}
        {{-- Por ejemplo, en una vista hija podrías tener algo como: --}}
        {{-- @section('content') --}}
        {{--     <p>Este es el contenido específico de la vista hija.</p> --}}
        {{-- @endsection --}}
    </main>

    <footer>
        <p>Pie de página de la plantilla maestra</p>
    </footer>

</body>
</html>

{{--
    Este es un ejemplo de una plantilla maestra en Blade.
    Puedes extender esta plantilla en otras vistas utilizando @extends('master')
    y definir el contenido específico de cada vista con @section('content').
    Es básicamente una plantilla que define la estructura básica de tu aplicación.
    Aquí suelen ir los elementos comunes como el encabezado, pie de página y el contenido principal.--}}