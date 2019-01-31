@extends('layouts.home')
@section('title')
	<title>忘記密碼</title>
@endsection

@section('list')

<div id="popup">
	<p>重發<span style="color: green;font-weight:bold;">重設密碼</span>驗證信</p>
	<form method="post" action="/">
	<label>請輸入信箱帳號</label>
	<input type="text" name="email">
	<input type="submit" name="ReSent" value="點擊重新發送驗證信">
	</form>
</div>

@endsection

@section('footer')

@endsection