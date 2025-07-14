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

    <body class="bg-neutral-600 h-[1500px]">
        <header class="bg-sky-200/75 backdrop-blur-md p-5 mt-5 border border-white mx-101 shadow-xl shadow-white/45 rounded-full z-50 top-0 sticky">
            <div class="flex justify-between items-center px-4">
                <h1 class="absolute left-[-300px] top-1/2 -translate-y-1/2 text-3xl">
                    <a class="text-white" href="/"> <span class="font-black">SQUASH</span><span class="font-extralight">PLASH</span></a>
                </h1>
                <nav class="flex gap-5 items-center">
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Clases</a>
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Instalaciones</a>
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Instructores</a>
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Testimonios</a>
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Contacto</a>
                    <a class="text-white uppercase font-black hover:text-cyan-300 text-sm" href="#">Nosotros</a>
                </nav>
            </div>
        </header>
        </div>
    </body>
</html>
