@extends('layouts.guest')
@section('container')
	<h1>About</h1>
	<div class="flex bg-red-500 text-white flex-col p-4">
	<h1 class="font-semibold color-red-600">{{$name}}</h1>
	<h1>{{$email}}</h1>
	<h1>{{$division}}</h1>
	<img src="image/{{$image}}" class="w-12">
	</div>
@endsection