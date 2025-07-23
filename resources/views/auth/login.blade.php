@extends('layouts.app')

@section('title')
    Login
@endsection

@section('contenido')
{{-- bg-gray-400 w-full max-w-sm mx-auto p-5 md:bg-amber-300 md:max-w-lg --}}
{{-- bg-gray-400 w-120 h-120 mb-15 mx-130 py-10 px-5 --}}

{{-- <div class="bg-white w-full max-w-md mx-auto p-4 sm:p-6 md:p-8 lg:p-10 rounded shadow">
    <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>
    <form>
        <label class="block mb-2 text-sm font-medium">Correo Electrónico</label>
        <input type="email" class="w-full mb-4 p-2 border rounded">

        <label class="block mb-2 text-sm font-medium">Contraseña</label>
        <input type="password" class="w-full mb-4 p-2 border rounded">

        <label class="block mb-2 text-sm font-medium">Rol</label>
        <select class="w-full mb-6 p-2 border rounded">
            <option disabled selected>--Selecciona--</option>
            <option>Cliente</option>
            <option>Empleado</option>
            <option>Administrador</option>
        </select>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Ingresar</button>
    </form>
</div> --}}

    <div class="bg-white dark:bg-gray-100 w-full max-w-md mx-auto px-5 py-10 mb-14 shadow-xl shadow-gray-600 dark:shadow-emerald-400 rounded-4xl sm:p-6 md:p-10">
        <h2 class="text-2xl text-center font-bold mb-8 dark:text-gray-500">Iniciar Sesión</h2>
        <form action="" method="POST" class="space-y-3 flex flex-col md:flex-col">
            @csrf
            <label for="email" class="text-gray-500 text-xs font-medium">Correo Electrónico:</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                placeholder="ejemplo@ejemplo.com" 
                class="mb-5 focus:outline focus:outline-sky-500 p-2 border border-sky-400 rounded-md dark:bg-white" 
                required>
           


            <label for="password" class="text-gray-500 text-xs font-medium">Contraseña:</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                placeholder="Tu contraseña" 
                class="mb-5 focus:outline focus:outline-sky-500 p-2 border border-sky-400 rounded-md dark:bg-white" 
                required>

            <label for="rol" class="text-gray-500 text-xs font-medium">Rol:</label>
            <select 
                name="rol" 
                id="rol" 
                class="mb-5 focus:outline focus:outline-sky-500 p-2 border border-sky-400 rounded-md dark:bg-white" 
                required>
                <option value="" disabled selected class="">--Selecciona--</option>
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
                <option value="admin">Administrador</option>
            </select>
            <p class="text-xs text-gray-400 mt-2.5">¿No tienes una cuenta?<a href=""> <span class="text-sky-600">Registrate aquí</span> </a></p>


            <button type="submit" class="bg-amber-400 hover:bg-amber-300 dark:bg-emerald-500 dark:hover:bg-emerald-400 dark:text-white text-black text-md font-bold rounded-md mt-10 py-2.5 cursor-pointer transition-all delay-100 sm:mx-20 sm:py-2.5">
                Ingresar
            </button>
        </form>
    </div>


    
@endsection