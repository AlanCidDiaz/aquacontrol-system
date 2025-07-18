@extends('layouts.app');

@section('title')
    Inicio
@endsection

@section('contenido')

    <div class="relative w-full max-w-4xl mx-auto">
        <img class="w-full h-auto rounded-xl overflow-hidden" src="img/home-pool.jpg" alt="Imagen de Piscina">
        <div class="absolute inset-7 justify-center py-65">
            <h2 class="text-white font-extrabold text-4xl">Bienvenido a Natación</h2>
            <p class="text-white text-2xs mt-2.5">Las mejores clases de natación con instructores certificados</p>
            <div class="mt-8">
                <a href="#" class="bg-sky-500 px-3 py-4 mt-2.5 rounded-md text-white cursor-pointer hover:bg-gray-50 hover:text-sky-500 transition-colors duration-300 dark:bg-white font-bold dark:text-sky-600 dark:hover:bg-sky-500 dark:hover:text-white">Explorar Clases</a>
            </div>
        </div>
    </div>
@endsection