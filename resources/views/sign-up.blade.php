@extends('layouts.home')
@section('title')
	<title>註冊頁</title>
@endsection

@section('list')

<div id="sign-up-form">
 	<form action='sign-up'method="post">
 	{!! csrf_field() !!}
 	<h3>註冊會員</h3>
 	<h5>信箱註冊</h5>
 		<table id="commend-form">
 			<tr>
 				<td>
 					暱稱
 				</td>
 				<td>
 					<input type="text" name="name" value="{{ old('name') }}">
 				</td>
 				<td>
 					常用信箱
 				</td>
 				<td>
 					<input type="text" name="email" value="{{ old('email') }}">
 				</td>
 					
 			</tr>
 			
 			<tr>
 				<td>
 					密碼
 				</td>
 				<td>
 					<input type="password" name="password">
 				</td>

 				<td>
 					密碼確認
 				</td>
 				<td>
 					<input type="password" name="password_confirmation">
 				</td>

 			</tr>

	</table>
	<div id="submit">
	<input type="submit" name="submit" id="submit-btn">

	</div>

	</form>
	<div id="re-sent">
	<button  onclick="window.open('resent-verify-email.php')">
	</button>
</div>

</div>

@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;font-weight: bold;">{{ $error }}</li>
            @endforeach
        </ul>
@endif

<hr>

<div id="fb-sign-up">
	<h5>facebook 註冊</h5>
	<h3><a href="#">使用 Facebook 註冊</a></h3>
</div>


@endsection

@section('footer')

@endsection