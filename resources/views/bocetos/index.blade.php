@extends('layouts.platillaSeccions')

@section('title', 'LC/Secciones/Bocetos')
@section('nombreSeccion', 'Bocetos')


@section('content')

<div class="inicioBocetos">
    <img src="{{asset('/storage/imagenes/iHEm0IhnMXDCZaQgFqN7XZZmgr6nkMmQCRKqXQ5P.gif')}}" alt="Koro">
    <p>Bienvenido a la sección de bocetos.<br><br>
        Usa tu imaginación y siente libre
        de decorarlos como tú quieras en la sección dibujo.</p>
</div><hr noshade="" class="HR1">
<div class="contenedor-imagenes">
    @foreach ($bocetos as $boceto)
     <div class="imagen" onclick="seleccionarPlantilla('{{asset($boceto->url)}}')">
        <img src="{{asset($boceto->url)}}" alt="{{$boceto->nombre_boceto}}">
        <button class="Pintar">Pintar</button>
    </div>       
    @endforeach

    <div class="imagen">
        <h3>Crear boceto</h3>
        <a href="{{ route('bocetos.create') }}" style="text-decoration: none;">
            <div style="width: 160px; height: 160px; background-color: #F5F5F5; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                <div style="font-size: 150px; color: #A9A9A9;">+</div><br>
            </div>
        </a>
        
    </div>
    {{-- <div class="imagen" onclick="seleccionarPlantilla('{{asset('/storage/imagenes/gq48XIkL5hS4YLsZrGaiViSq3zNNL0uxezPfdcn2.webp')}}')">
        <img src="{{asset('/storage/imagenes/9CANOAzH3DGWyynRjNjznExahGuDzpqcQIJTXPsu.webp')}}">
        <button class="Pintar">Pintar</button>
    </div>
    <div class="imagen" onclick="seleccionarPlantilla('{{asset('/storage/imagenes/NNn0ldpOI3cPI0rPZJY4okV3SaalREHVdcJvGEWR.webp')}}')">
        <img src="{{asset('/storage/imagenes/uhieRUA7UiVSLq6VZ4MlpmkLyBFnmtjlolXrl4T0.webp')}}">
        <button class="Pintar">Pintar</button>
    </div>
    <div class="imagen" onclick="seleccionarPlantilla('{{asset('/storage/imagenes/6Ki70t2VSjESv0IdKWyNGDngSCkQxVrzVhA3wszB.webp')}}')">
        <img src="{{asset('/storage/imagenes/QNR6stpUYILkK4s0WujwWv4GCo1Th0BvdQAzVwQY.webp')}}">
        <button class="Pintar">Pintar</button>
    </div> --}}
</div>
<script>
    function seleccionarPlantilla(rutaPlantilla){
        window.location.href = '{{route('seccions.dibujo')}}?plantilla=' + encodeURIComponent(rutaPlantilla);
    }
</script>

@endsection