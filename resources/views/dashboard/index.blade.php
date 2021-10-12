@extends('layouts.main')
@section('container')


<h1 class="font-semibold text-xl md:text-2xl">Welcome back, {{auth()->user()->name}}</h1>

@endsection