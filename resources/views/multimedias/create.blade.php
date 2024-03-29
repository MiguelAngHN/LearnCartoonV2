@extends('layouts.app')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Crear multimedia</h1>
<form action="{{route('multimedias.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">

    @csrf
    {{-- <label>
        URL:
        <br>
        <input type="text" name="url" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label> --}}
   <input type="file" name="file" id="" accept="image/*">
   @error('file')
       <span class="text-danger">Problema con el archivo</span>
   @enderror
        
    <br><br>
    <br><br>
    <button type="submit" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md border-2 hover:bg-white">Enviar Formulario:</button>





@endsection