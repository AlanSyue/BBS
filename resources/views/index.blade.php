@extends('layouts.home')
@section('title')
	<title>首頁</title>
@endsection

@section('right-zone')
	@if(Auth::check())
		<button id="wantAsk"><a href="ask">我要發文</a></button>

	@else
		<button id="wantAsk"><a href="login">我要發文</a></button>
	@endif

@endsection

@section('list')
@foreach($news->reverse() as $new)
	<div id='post-zone'>

		<a href='/post/{{$new->id}}'>

			<div id='post-categories'>
				<span>
					{{$typearry[$new->type]}} |
				</span>
				<span>{{$new->user->name}} </span>
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
	<span>共 {{$count}} 篇文章</span>
	<span class="PageText">
	第{{$data}}頁</span>


	@if($data==$nextBtnCount )
	<button class='nextHide'></button>

	@else
	<button class='next' onclick="javascript:location.href='/?page={{$page}}'">下一頁>></button>
	@endif

	@if($data>1)
		<button class='next' onclick="javascript:location.href='/?page={{$previous}}'">上一頁<<</button>
	@else
	
	@endif
@endsection