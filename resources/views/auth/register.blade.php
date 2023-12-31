@extends('layouts.app')

@section('titulo')
Regístrate en FlexiPackets
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center ">
        <div class="md:w-6/12 p-5 rounded-lg">
            <img class="rounded-xl" src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500
                        @enderror"
                        value="{{ old('name') }}"
                    />
                    
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tu nombre de usuario
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500
                        @enderror"
                        value="{{ old('username') }}"
                    />
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="address" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tu direccion
                    </label>
                    <input
                        id="address"
                        name="address"
                        type="text"
                        placeholder="Tu Direccion"
                        class="border p-3 w-full rounded-lg @error('direccion') border-red-500
                        @enderror"
                        value="{{ old('direccion') }}"
                    />
                    @error('address')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="phone" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tu número de telefono
                    </label>
                    <input
                        id="phone"
                        name="phone"
                        type="text"
                        placeholder="Ingresa tu número de telefono"
                        class="border p-3 w-full rounded-lg @error('direccion') border-red-500
                        @enderror"
                        value="{{ old('phone') }}"
                    />
                    @error('phone')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tu Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Ingresa tu Email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500
                        @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="crea tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500
                        @enderror"
                    />
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir contraseña
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500
                        @enderror"
                    />
                </div>
                <input
                    type="submit"
                    value="crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection