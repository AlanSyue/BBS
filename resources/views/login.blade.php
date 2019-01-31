@extends('layouts.home')
@section('title')
	<title>登入頁</title>
@endsection

@section('list')

<div id="sign-in-form">
 	 	<form action="{{ route('login') }}" method="post">
 	 	{!! csrf_field() !!}	
 	 	<h3>立即登入</h3>
 	 		<table id="sign-form">
 	 			<tr>
 	 				<td>
 	 					信箱帳號
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

 	 			</tr>

 		</table>
 		<div id="submit">
 		<input type="submit" name="submit" id="submit-btn">
 		</div>
 		</form>
 		<div id="re-sent">
 		<button  onclick="window.open('forget-passwords.php')">
 			忘記密碼？
 		</button>
 		</div>

 </div>

<hr>

 <div id="fb-sign-up">
 	<h5>facebook 登入</h5>
 	<h3><a href="#">使用 Facebook 登入</a></h3>

 </div>

@endsection

@section('footer')

@endsection