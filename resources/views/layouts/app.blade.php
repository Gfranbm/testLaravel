<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel - @yield('titulo')</title>
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h2 class="text-4xl font-extrabold">DevStagram</h2>
                    @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-gray-600 text-sm" href="">
                            <span class="font-normal">
                                {{auth()->user()->username}}
                            </span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                             class="font-bold uppercase text-gray-600 text-sm"
                             type="submit"
                             >
                                Cerrar Sesión
                            </button>
                        </form>

                    </nav>
                    @endauth
                    @guest()
                        <nav class="flex gap-2 items-center">
                            <a class="font-bold uppercase text-gray-600 text-sm" href="">Login</a>
                            <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear cuenta</a>
                        </nav>
                    @endguest

            </div>
        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center font-bold uppercase text-gray-500 mt-10">
            DevStagram - Todos los derechos reservados {{ now()->year}}
        </footer>

    </body>
</html>
