@extends('layouts.app')

@section('conteudo')

    <form action="{{ url('pokemon') }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        
       <div class="border-black">
            <div  class=" mb-5 bg-green-500 rounded-md px-4 py-2 w-full text-center">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Pokemon</label>
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
            </div>
            <div class="mb-5 bg-green-500 rounded-md px-4 py-2 w-full text-center">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Pokemon</label>
                <input type="text" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type" required />
            </div>
            
            <div class="mb-5 bg-green-500 rounded-md px-4 py-2 w-full text-center">
                <label for="remember" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Strenght</label >
                    
                <input type="number" name="strenght" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Strenght" />
            </div>
                
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create pokemon</button>


       </div>
    
        
    </form>
@endsection

