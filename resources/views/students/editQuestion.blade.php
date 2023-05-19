@extends('templates.default2')

@section('section')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white text-center">Edit Student</h1>
        </a>
    </header>
    <br>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section class="mt-10">
            <form action="/editQuestion/{{$data->id}}" method="POST" class="flex flex-col">
                @method('PUT')
                @csrf
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="question" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Question</label>
                    <input type="text" name="question" value="{{$data -> question}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('question')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="a" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Option A</label>
                    <input type="text" name="a" value="{{$data -> a}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('a')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="b" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Option B</label>
                    <input type="text" name="b" value="{{$data -> b}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('b')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="c" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Option C</label>
                    <input type="text" name="c" value="{{$data -> c}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('c')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="d" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Option D</label>
                    <input type="text" name="d" value="{{$data -> d}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('d')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="answer" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Answer</label>
                    <input type="text" name="answer" value="{{$data -> answer}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('answer')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <button class="bg-gray-400 hover:bg-gray-600 text-with font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Save Edits</button>
            </form>
            <form action="/questionDelete/{{$data->id}}" method="POST">
                @method('delete')
                @csrf
                <button class="bg-red-400 text-white px-4 py-1 hover:bg-red-800 rounded shadow-lg hover:shadow-x1 transition duration-200 w-full font-bold" type="submit">Delete</button>
            </form>
        </section>
    </main>
@endsection