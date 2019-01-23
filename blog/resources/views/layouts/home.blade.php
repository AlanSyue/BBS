<!DOCTYPE html>
<html>
<head>
	@yield('title')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
</head>
<body>
	<header class="nav_button">
		<h1>BBS_Alan</h1>
		<div class="topnav">
			<a class={{$classLog}} href='/login.php'>登入</a>
		    <a class={{$classReg}} href='/sign-up'>註冊</a>
		    <a class={{$classHome}} href='/'>首頁</a>
		</div>
	</header>

	<section class="clear-float"></section>

	<!-- header後顯示區 -->
	<div id="post-bar">
		<h2>{{$h2Title}}</h2>
		@yield('right-zone')

		<section class="clear-float"></section>
	</div>

	<!-- 留言列表 -->
	<div id="commend-area">
		@yield('list')
	</div>

	<footer>
		@yield('footer')
	</footer>

</body>
</html>