@extends('layouts.guest')
@section('container')
<h1 class="font-semibold text-2xl">{{ $title }}

</h1>


<div class="grid grid-cols-4 gap-8 p-4">
	
@if($posts->count())

	<div class="flex space-4 px-6 py-5 flex-col bg-gray-300 rounded-2xl space-y-1 col-span-3" style="background: url(https://source.unsplash.com/800x600/?{{ $posts[0]->Category->name }};">
	<h1 class="font-semibold text-xl">{{ $posts[0]->title }}</h1>
	<label>{{ $posts[0]->created_at->diffForHumans() }}</label>
	<h1>{{ $posts[0]->status }}</h1>
	<a href="/categories/{{ $posts[0]->Category->slug }}">{{ $posts[0]->Category->name }}</a>
	<h1>{{ $posts[0]->excerpt }}</h1>
	<a href="/detail-room/{{ $posts[0]->id}}" class="text-base bg-blue-400 text-white px-4 py-2 font-semibold tracking-wider rounded-lg w-max">
	Use This Room</a>
	</div>


@else

<label class="text-2xl text-center font-semibold">No Room Found</label>
@endif

@foreach ($posts->skip(1) as $post)
	<div class="grid grid-rows-2 bg-gray-300 rounded-3xl space-y-1 h-80 shadow-md bg-cover bg-no-repeat bg-center bg-gradient-to-t from-black " style="background-image: linear-gradient(to top, rgb(0 0 0 / 72%), rgb(0 0 0 / 12%)),url(https://images.pexels.com/photos/236730/pexels-photo-236730.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)">
		<div class="flex flex-row px-4 py-5  justifty-start ">
			
			<div class="flex flex-col space-y-1">
			<h1 class="font-bold text-xl text-white leading-tight">{{ $post->title }}</h1>
			<a href="/categories/{{ $post->Category->slug }}" class="border-2 bg-white border-white text-sm px-2 w-max rounded-lg text-gray-700 font-semibold tracking-wide">{{ $post->Category->name }}</a>
			
			</div>
			<i class="fas fa-door-open bg-white rounded-full p-2 text-red-600 font-semibold"></i>
			<!-- <h1>{{ $post->status }}</h1> -->
		</div>
	<div class="flex space-x-4 flex-row px-6 py-5 rounded-b-3xl place-self-end items-center w-full justify-between" >		
	<label class="text-gray-200 text-xs text-left">Last Use <br> {{ $posts[0]->created_at->diffForHumans() }}</label>
	<a href="/detail-room/{{ $post['id']}}" class="shadow-lg text-sm bg-blue-500 text-white px-4 py-2 font-semibold tracking-wider rounded-2xl w-max hover:bg-blue-600">
	Booking</a>
	</div>
	</div>
@endforeach


</div>

@endsection