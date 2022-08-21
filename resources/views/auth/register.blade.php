@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/Diseño/registrar.jpg')}}" alt="imagen reistro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre:
                    </label>
                    <input
                    type="text"
                    name="name"
                    placeholder="tu nombre"
                    value="{{old('name')}}"
                    class="border p-3 w-full rounded-lg
                     @error('name') border-red-500
                     @enderror"

                    >

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" id="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario:
                    </label>
                    <input
                    type="text"
                    name="username"
                    placeholder="tu nombre de usuario"
                    value="{{ old('username')}}"
                    class="border p-3 w-full rounded-lg
                    @error('username') border-red-500
                    @enderror"
                    >
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        E-mail:
                    </label>
                    <input
                    type="email"
                    name="email"
                    placeholder="tu e-mail"
                    value="{{ old('email')}}"
                    class="border p-3 w-full rounded-lg
                    @error('email') border-red-500
                    @enderror"
                    >
                    @error('email')
                      <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="password" id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña:
                    </label>
                    <input
                    type="password"
                    name="password"
                    placeholder="Password de registro"
                    class="border p-3 w-full rounded-lg
                    @error('password') border-red-500
                    @enderror"
                    >
                    @error('password')
                      <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña:
                    </label>
                    <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="repite tu password"
                    class="border p-3 w-full rounded-lg"
                    >
                </div>
                <input
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 w-full hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold rounded-lg p-3 text-white text-center ">
            </form>
        </div>
    </div>

@endsection
