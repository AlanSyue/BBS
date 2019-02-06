@extends('layouts.home')
@section('title')
	<title>發表文章頁</title>
@endsection

@section('list')

<div id="commend-zone">
	 <div id="commend">
	 	<form method="post">
	 	{!! csrf_field() !!}
	 	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	 	<h3>發表文章</h3>
	 	<p>種類</p>
	 	<select name="type">
	 	　<option value="1">心情</option>
	 	　<option value="2">分享</option>
	 	　<option value="3">提問</option>
	 	</select>
	 	<p>標題</p>
	 	<input type="text" name="subject" autocomplete="off">
	 	<p>內容</p>
	 		<textarea type="text" name = "content" autocomplete="off" placeholder="輸入文章內容 ..."></textarea>
		<div id="submit">
		<input type="submit" name="submit" id="submit-btn">
		</div>
		</form>

	 </div>

	 </div>
</form>

</div>

@endsection

@section('footer')

@endsection