@extends('layouts.home')
@section('title')
	<title>首頁</title>
@endsection

@section('right-zone')
	<button id="wantAsk"><a href="#">我要發文</a></button>
@endsection

@section('list')
@foreach($news->reverse() as $new)
	<div id='post-zone'>

		<a href='#'>

			<div id='post-categories'>
				<span>{{$new->type}}  </span>
				<span>{{$new->m_id}} </span>
			</div>

			<div id='post-content'>
				<h3> {{$new->subject}} </h3>
				<p id='ellipsis'> {{$new->content}}</p>
			</div>
		</a>
	</div>
@endforeach
@endsection

@section('footer')
	<span class="PageText">第1頁</span>
	<button class='next'>下一頁>></button>
@endsection