@extends('layouts.guest')
@section('container')


<section class="flex flex-col md:flex-row h-screen items-center">

	<div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
		<img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
	</div>

	<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
	flex items-center justify-center">

	<div class="w-full h-100">

		@if(session()->has('success'))
		<div x-data="{ open: true }">
			<div x-show="open" x-transition class="flex items-center justify-between text-white text-sm font-bold px-4 py-3 rounded shadow-md bg-green-400">
				<div>{{session('success')}}</div>
				<button type="button" class="flex" x-on:click="open = ! open">
					<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-4"><path d="M6 18L18 6M6 6l12 12"></path></svg>
				</button>
			</div>
		</div>
		@endif

		@if(session()->has('LoginError'))
		<div x-data="{ open: true }">
			<div x-show="open" x-transition:enter="transition ease-out duration-1000" x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="flex items-center justify-between text-white text-sm font-bold px-4 py-3 rounded shadow-md bg-red-400">
				<div>{{session('LoginError')}}</div>
				<button type="button" class="flex" x-on:click="open = ! open">
					<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-4"><path d="M6 18L18 6M6 6l12 12"></path></svg>
				</button>
			</div>
		</div>
		@endif

		<h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

		<form class="mt-6" action="/login" method="POST">
			@csrf
			<div>
				<label class="block text-gray-700">Email Address</label>
				<input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
				@error('email') <span class="text-sm text-red-500">{{$message}}</span> @enderror
			</div>

			<div class="mt-4">
				<label class="block text-gray-700">Password</label>
				<input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
				@error('password') <span class="text-sm text-red-500">{{$message}}</span> @enderror
			</div>

			<div class="text-right mt-2">
				<a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
			</div>

			<button type="submit" class="tracking-wider w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
			px-4 py-3 mt-6">Log In</button>
		</form>

		<hr class="my-6 border-gray-300 w-full">

		<button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
			<div class="flex items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
				<span class="ml-4">
					Log in
					with
				Google</span>
			</div>
		</button>

		<p class="mt-8">Need an account? <a href="/register" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
		account</a></p>


	</div>
</div>

</section>


@endsection
