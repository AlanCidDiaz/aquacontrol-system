<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SquashPlash | @yield('title')</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    {{-- h-[1500px] --}}
    <body class="dark bg-gray-100 dark:bg-neutral-900 h-[1500px]">

        <!-- ===== HEADER: Navegación principal con logo y sticky ===== -->
        <header class="bg-gray-300/75 dark:bg-sky-200/75 backdrop-blur-md p-5 mt-5 border border-black border-hidden dark:border-white mx-115 dark:shadow-xl shadow-inner shadow-black/35 dark:shadow-white/45 rounded-full z-50 top-0 sticky">
            <div class="flex justify-between items-center px-4">
{{-- shadow-inner shadow-black/35 --}}
                 <!-- Logotipo posicionado con absolute a la izquierda -->
                <h1 class="absolute left-[-300px] top-1/2 -translate-y-1/2 text-3xl">
                    <a class="text-white" href="/"> <span class="text-black dark:text-white font-black">SQUASH</span><span class="text-black dark:text-white font-extralight">PLASH</span></a>
                </h1>

                 <!-- Menú de navegación principal -->
                <nav class="flex gap-5 items-center text-neutral-900 dark:text-white">
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Inicio</a>
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Clases</a>
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Costos</a>
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Instructores</a>
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Horarios</a>
                    <a class="uppercase font-black hover:text-white dark:hover:text-cyan-300 text-sm" href="#">Contacto</a>
                </nav>

                 <!-- Botones de modo Dark y Light usando librería Lucide-->
                <div class="absolute right-[-300px] top-7 -translate-y-1/2">
                    <div class="cursor-pointer">
                        <i data-lucide="Sun" class="size-8 stroke-gray-100 hidden dark:inline-block"></i>
                        <i data-lucide="Moon" class="size-8 stroke-gray-600 inline-block dark:hidden"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Contenido Principal -->
        <main class="max-w-[1800px] px-4 mx-auto mt-16">
            @yield('contenido')
        </main>

       <footer class="w-full bg-sky-600 text-white p-6 mt-10">
            <div class="container mx-auto text-center">
                <p class="text-sm">&copy; {{now()->year}} SQUASHPLASH.</p>
                <p class="text-sm">Todos los derechos reservados.</p>
                <p class="text-xs mt-2 text-cyan-300">Desarrollado por Alan Cid Díaz</p>
            </div>
        </footer>

    </body>
</html>
