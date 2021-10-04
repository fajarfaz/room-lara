@extends('layouts.guest')
@section('container')
<h1 class="font-semibold text-xl">Room</h1>


<div class="grid grid-cols-2 gap-4 p-4">
	

	<article class="flex space-4 p-3 flex-col bg-gray-300 rounded-lg">
	<h1 class="font-semibold">{{ $room->title }}</h1>
	<h1>{{ $room->status }}</h1>
	{!! $room->body !!}
	<a href="/room">Back to room</a>
	</article>


</div>

@endsection