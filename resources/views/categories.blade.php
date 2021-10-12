@extends('layouts.guest')
@section('container')
<h1 class="font-semibold text-xl">All Categories</h1>


<div class="flex space-x-4 items-center p-4">
	
@foreach ($categories as $category)
	<article class="p-3 bg-gray-300 rounded-lg">
	
	<a href="/room?category={{ $category->slug }}">{{ $category->name }}</a>

	</article>
@endforeach

</div>

@endsection