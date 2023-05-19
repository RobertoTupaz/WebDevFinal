@extends('templates.default2')

@section('section')
    <x-messages />
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white text-center">Admin Login</h1>
        </a>
    </header>
    
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Welcome to student system!</h3>
            <p class="text-gray-600 pt-2"><a href="/signup">Create new account!</a></p>
        </section>
        <section class="mt-10">
            <form action="/login/process" method="POST" class="flex flex-col">
                @csrf
                <p class="text-red-500 px-2 text-sm mt-2">
                    @error('email')
                        {{$message}}
                    @enderror
                </p>
                <div class="mb-6 pt-3 rounded bg-gray-300">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 px-3 py-1" value="{{old('email')}}">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-300">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 px-3 py-1">
                </div>
                <button class="bg-gray-400 hover:bg-gray-600 text-with font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Submit</button>
            </form>
        </section>
    </main>
@endsection