@extends('layouts.guest')
@section('container')

<div class="flex justify-between w-full items-center px-4 pt-10 pb-4">
	<h1 class="font-semibold text-3xl text-center ">{{ $title }}</h1>
	<form action="/room" class="flex space-x-2 my-auto">
		<!--  menyimpan pencarian trkhr -->
		@if (request('category'))
		<input type="hidden" name="category" value="{{request('category')}}">
		@endif
		<input type="text" name="search" class="border bg-gray-200 px-3 py-1 rounded-md" placeholder="Search .." value="{{request('search')}}"> 	
		<button type="submit"  class="border bg-blue-500 text-white px-5 tracking-wider py-1 rounded-md font-semibold">Search</button>
	</form>
</div>



<div class="grid grid-cols-4 gap-8 p-4">
	
	@if($posts->count())

	<div class="relative text-center grid grid-rows-2 px-6 py-5 flex-col bg-gray-300 rounded-2xl space-y-1 col-span-3 bg-cover bg-center" style="background-image: linear-gradient(to top, rgb(0 0 0 / 72%), rgb(0 0 0 / 46%)),url(https://images.pexels.com/photos/236730/pexels-photo-236730.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)">
		<h1 class="font-semibold text-2xl text-white">{{ $posts[0]->title }}</h1>
		<div class="absolute top-3 right-5 text-white rounded-full p-2 	{{($posts[0]->status==1) ? 'bg-red-500' : 'bg-yellow-500' }} shadow-lg font-semibold h-10 w-10 self-start flex items-center r-0 flex-none">
				<i class="
				{{($posts[0]->status == 1) ? 'fas fa-door-closed mx-auto' : 'fas fa-door-open mx-auto'}}			
				"></i>
			</div>

		<h1>{{ $posts[0]->status }}</h1>

		<article class="text-white text-left">{{ $posts[0]->excerpt }}</article>
		<div class="flex space-x-4 flex-row  pt-3 rounded-b-3xl place-self-end items-center w-full justify-between" >	
			<div class="flex items-center space-x-4">
				<a href="/room?category={{ $posts[0]->Category->slug }}" class="bg-gradient-to-r from-gray-900 text-white p-2 rounded-r-md border-l-2 border-red-600">{{ $posts[0]->Category->name }}</a>	
				<label class="text-gray-300 text-xs text-left">Last Use <br> <span class="text-white">{{ $posts[0]->created_at->diffForHumans() }}</span></label>
			</div>
			<a href="/detail-room/{{$posts[0]->id}}" class="shadow-lg text-sm bg-blue-500 text-white px-4 py-2 font-semibold tracking-wider rounded-2xl w-max hover:bg-blue-600">
			Booking This Room</a>
		</div>
	</div>




	@foreach ($posts->skip(1) as $post)
	<div class="grid grid-rows-2 bg-gray-300 rounded-3xl space-y-1 h-80 shadow-md bg-cover bg-no-repeat bg-center bg-gradient-to-t from-black " style="background-image: linear-gradient(to top, rgb(0 0 0 / 72%), rgb(0 0 0 / 46%)),url(https://images.pexels.com/photos/236730/pexels-photo-236730.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)">
		<div class="flex flex-row px-4 py-5 space-x-2 justify-between">
			
			<div class="flex flex-col space-y-1">
				<h1 class="font-bold text-lg text-white leading-tight">{{ $post->title }}</h1>
				<a href="/room?category={{ $post->Category->slug }}" class="border-l-2 border-red-600 bg-gradient-to-r from-gray-900  text-sm px-2 w-max rounded-br-lg text-gray-200 font-semibold tracking-wide">{{ $post->Category->name }}</a>

			</div>
		
			<div class="text-white rounded-full p-2 {{($post->status==1) ? 'bg-red-500' : 'bg-yellow-500' }} shadow-lg font-semibold h-10 w-10 self-start flex items-center r-0 flex-none">
				<i class="
				{{($post->status==1) ? 'fas fa-door-closed mx-auto' : 'fas fa-door-open mx-auto'}}			
				"></i>
			
			</div>
			<!-- <h1>{{ $post->status }}</h1> -->
		</div>
		<div class="flex space-x-4 flex-row px-6 py-5 rounded-b-3xl place-self-end items-center w-full justify-between" >		
			<label class="text-gray-300 text-xs text-left">Last Use <br> <span class="text-white">{{ $posts[0]->created_at->diffForHumans() }}</span></label>
			<a href="/detail-room/{{ $post->id}}" class="shadow-lg text-sm bg-blue-500 text-white px-4 py-2 font-semibold tracking-wider rounded-2xl w-max hover:bg-blue-600">
			Booking</a>
		</div>
	</div>
	@endforeach

	@else

	<label class="text-2xl text-center font-semibold">Sorry, No Room Found..</label>
	@endif
 	
</div>
<div class="mt-5 py-6 px-5 bg-gray-200 rounded-lg ">
{{ $posts->links()}}
</div>

@endsection