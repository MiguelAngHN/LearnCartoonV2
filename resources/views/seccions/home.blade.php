@extends('layouts.hmf')

@section('title', 'LC/Secciones')

@section('content')

<div class="TituloPag">
    <p>Secciones</p>
    <p id="fecha-actual"></p>
    <script src="{{ asset ('assets/js/Current Date.js') }}"></script>
</div>


{{-- <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cliente)
            <tr>
                <td>{{$cliente['name']}}</td>
                <td>{{$cliente['email']}}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}


<div class="InfoSecciones">
    <div class="Secciones">
        <a href="PagNumeros.html">
            {{-- @foreach ($multimedias as $multimedia) --}}
            <img src="{{ asset('/storage/imagenes/jhc2jAyKnweIYML39nYtAi1mPnezIzFWf5kxexov.webp	') }}" alt="Gif de Números">
            {{-- @endforeach --}}
        </a>
        <p>Te gustan los números, aprende con ellos. Te brindamos
            un aprendizaje facil limitando la cantidad de números
            hasta 50. Vamos adentrate a este facinante mundo y comencemos nuestra
            aventura numérica.🎉 💯
        </p>
    </div>
    <div class="Secciones2">
        <p>Puedes distraerte, aprender y divertirte escribiendo
            como también puedes formar palabras. Conoscan sus emociones, aprendan
        más conocimientos y alimenten su imaginación.</p>
        <a href="PagLyP.html"><img src="{{ asset('assets/images/Letras-Seccion.gif') }}" alt="Gif de Letras"></a>
    </div>
    <div class="Secciones3">
        <a href="PagDibujo.html"><img src="{{ asset('assets/images/Anime.gif') }}" alt="Gif de anime"></a>
        <p>Dibuja, colorea personajes de anime y animaciones.🌈 Lo mejor es
            que puedes interarctuar con ellos navegando por las
            secciones. Elige el que mas te guste y a PINTAR. 🖌️
        </p>
    </div>
</div>

@endsection