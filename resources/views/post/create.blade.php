@extends('layouts.app')

@section('titulo')
    crear un nuevo packet
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen aqui
        </div>

        <div class="md:w-1/2 p-10 md:w-4/12 bg-white rounded-lg shadow-xl mt-10 md-mt:0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        titulo
                    </label>
                    <input
                        id="titulo"
                        name="titulo"
                        type="text"
                        placeholder="titulo"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500
                        @enderror"
                        value="{{ old('titulo') }}"
                    />
                    
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea
                        id="descripcion"
                        name="descripcion"
                        type="text"
                        placeholder="descripcion"
                        class="border p-3 w-full rounded-lg @error('desscricion') border-red-500
                        @enderror"
                    >{{ old('titulo') }}</textarea>
                    
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="crear"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection