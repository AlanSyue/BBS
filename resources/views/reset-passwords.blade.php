@extends('layouts.home')
@section('title')
	<title>重設密碼頁</title>
@endsection

@section('list')

<div id="popup">
	<p><span style="color: green;font-weight:bold;">重設密碼</span></p>
	<form method="post">
	{{ csrf_field() }}
	<input type="hidden" name="token" value="{{ $token }}">
	<label>電子信箱</label>
	<input type="email" name="email" value="{{$email}}">
	<label>密碼</label>
	<input type="password" name="password">
	<label>確認密碼</label>
	<input type="password" name="password_confirmation">
	<input class="modifyPSW" type="submit" name="ReSent" value="修改密碼">
	</form>
</div>

@endsection

@section('footer')

@endsection