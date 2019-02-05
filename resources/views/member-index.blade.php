@extends('layouts.home')
@section('title')
	<title>{{Auth::user()->name}} 的個人頁面</title>
@endsection

@section('right-zone')

@endsection

@section('list')
<content>
	<div id="my_info">
<!-- 		<img src="{{asset('resources/assets/img/test.jpg')}}"> -->
		<p>暱稱：{{Auth::user()->name}}</p> 
<!-- 		<p>服務領域：</p> -->	
		 <p>發文數：?</p>
		 <button  onclick="window.open('reset-passwords/{{Auth::user()->name}}/{{Auth::user()->email}}')">
		 	修改密碼
		 </button>


	</div>
	
</content>
@endsection

@section('footer')

@endsection