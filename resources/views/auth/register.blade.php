@extends('layouts.app')


@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios" srcset="">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block uppercase text-gray-500 fond-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre"
                        class="border p-3 w-full @error('name') border-red-500 rounded-lg @enderror"
                        value={{ old('name') }}>
                    @error('name')
                        <p class="bg-red-500 text-white rounded-lg text-sm p-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="block uppercase text-gray-500 fond-bold">
                        Username
                    </label>

                    <input id="username" name="username" type="text" placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full"
                        value="{{ old('username') }}">
                </div>

                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 fond-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email de Registro"
                        class="border p-3 w-full">
                </div>

                <div class="mb-5">
                    <label for="password" class="block uppercase text-gray-500 fond-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Password de Restro"
                        class="border p-3 w-full">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block uppercase text-gray-500 fond-bold">
                        Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Password de Restro" class="border p-3 w-full">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    @endsection

    <div class="clas"></div>
