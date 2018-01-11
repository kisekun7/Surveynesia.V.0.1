@extends('layouts.master')

@section('title','Blog Sekolah koding')

@section('content')
	<h1>Selamat Datang di Rakaal Webisite</h1>
	<h2> {{ $quest->surve_title }} </h2>
	<hr>
	<p>
		{{ $quest->description }}
	</p>
@endsection