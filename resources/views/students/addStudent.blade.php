@extends('templates.default2')

@section('section')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white text-center">Add New Student</h1>
        </a>
    </header>
    <br>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section class="mt-10">
            <form action="/newStudent" method="post" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
                    <input type="text" name="username" value="{{old('username')}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('username')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="text" name="password" value="{{old('password')}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('password')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                {{-- <div class="mb-6 pt-3 rounded bg-white">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Sex</label>
                    <label class="radio-inline px-3"><input type="radio" name="sex" value="Male"> Male</label>
                    <label class="radio-inline px-3"><input type="radio" name="sex" value="Female"> Female</label>
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('sex')
                            {{$message}}
                        @enderror
                    </p>
                </div> --}}
                <div class="mb-6 pt-3 rounded bg-white">
                    <label for="user" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name="user" value="{{old('user')}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('user')
                            {{$message}}
                        @enderror
                    </p>
                </div>
                {{-- <div class="mb-6 pt-3 rounded bg-white">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-00 px-3 py-1">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('email')
                            {{$message}}
                        @enderror
                    </p>
                </div> --}}
                <button class="bg-blue-100 hover:bg-blue-2  00 text-with font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Add new</button>
            </form>
        </section>
    </main>
@endsection