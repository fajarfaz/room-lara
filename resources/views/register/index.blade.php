@extends('layouts.guest')
@section('container')


<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Register to your account</h1>

      <form class="mt-6" action="/register" method="POST">
          @csrf
        <div class="mt-4">
          <label class="block text-gray-700">Name</label>     
          <input type="text" name="name" id="name" placeholder="Enter Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('name') border-red-500  focus:border-red-500 @enderror" autofocus autocomplete value="{{ old('name') }}" required>
          @error('name') <span class="text-sm text-red-500">{{$message}}</span> @enderror
        </div>
          <div class="mt-4">
          <label class="block text-gray-700">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter Username" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete value="{{ old('username') }}" required>
          @error('username') <span class="text-sm text-red-500">{{$message}}</span> @enderror
        </div>
        <div class="mt-4">
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete value="{{ old('email') }}" required>
          @error('email') <span class="text-sm text-red-500">{{$message}}</span> @enderror
        </div>
        <div class="mt-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="password" id="" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
          @error('password') <span class="text-sm text-red-500">{{$message}}</span> @enderror
        </div>

        <button type="submit" class="tracking-wider w-full block bg-green-500 hover:bg-green-400 focus:bg-green-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Register</button>
      </form>

      <hr class="my-6 border-gray-300 w-full">

     
      <p class="mt-8">Do you have account? <a href="/login" class="text-blue-500 hover:text-blue-700 font-semibold">Login here</a></p>


    </div>
  </div>

</section>


@endsection