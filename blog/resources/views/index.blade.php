@extends('layouts.home')
@section('title')
	<title>首頁</title>
@endsection

@section('right-zone')
	<button id="wantAsk"><a href="#">我要發文</a></button>
@endsection

@section('list')
@foreach($news as $new)
	<li>{{$new->title}}</li>
@endforeach
@endsection

@section('footer')
	<span class="PageText">第1頁</span>
	<button class='next'>下一頁>></button>
@endsection