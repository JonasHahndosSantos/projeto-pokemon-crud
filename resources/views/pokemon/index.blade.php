@extends('layouts.app')
   
@section('conteudo')
    <div class="max-w-sm mx-auto mt-5">
        @foreach($pokemon as $entidade)
            <div class="mb-5 bg-blue-300 bg-blue-500 border-2 border-gray-700 rounded-lg p-5 flex flex-col items-center shadow-xl relative">
               
               
                <div class="bg-gray-800 rounded-md px-4 py-2 w-full text-center">
                     <h4 class="text-white text-2xl font-bold mb-2">{{ $entidade->name }}</h4>
                    <p class="text-blue-500 text-sm font-semibold">{{ $entidade->type }}</p>
                    <p class="text-white text-m mt-1">Força: {{ $entidade->strenght }}</p>
                </div>




                <div class="flex space-x-4">
                    <a class="mt-3 bg-white hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-green-500" href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Editar</a>
                    <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="mt-3 border 2 border-white hover:bg-white hover:text-gray-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center text-white bg-red-500" type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection




