@extends('layouts.home')
@section('title')
	<title>{{$news->subject}} | {{$news->user->name}}的文章</title>
@endsection

@section('list')

 <div id="post-bar">
 	<div>
 		<div id='post-zone'>
 				<div id='post-categories'>
 					<span>文章分類：{{$typearry[$news->type]}} |</span>
 					<span> 發文者：{{$news->user->name}} </span>
 				</div>

 				<div id='post-content'>
 					<h3> {{$news->subject}}  </h3>
 					<p> {{$news->content}}</p>
 				</div>
 		</div>
 	</div>

 	@if(!Auth::check())
 		<div id='reply-zone' onclick='/login' >
 		<a href='/login'>
 		<div>
 			<div class='reply-input'>
 			<form method='post'>
 			<textarea type='text' placeholder='輸入回覆內容 ...'></textarea>
 			<img id='reply-send-icon' src='https://static.thenounproject.com/png/1228438-200.png'>
 		</form>
 		</div>
		 </div>
		 </a>
		 </div>
	@else
  		<div id='reply-zone'>
  			<div class='reply-input'>
  			<form method='post'>
  			{!! csrf_field() !!}
  			<input type="hidden" name="news_id" value="{{$news->id}}">
  			<textarea type='text' name = 'content' placeholder='輸入回覆內容 ...'></textarea>
  			<input id='reply-submit' value='回覆文章' type='submit' name='submit'>
  		</form>
  		</div>
 		 </div>
 	@endif
<div id="share-btn">
 <a href="https://social-plugins.line.me/lineit/share?url={{Request::url()}}"><img class='lineBtn' src="https://lh5.googleusercontent.com/-hQCNGNfHRTU/U_qzPv4UqBI/AAAAAAAAOOA/7yKX_JqCJm0/s800/line_share01.jpg"></a>

 <a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"><img class="fbBtn" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqxetIoELHqQzZA-1DRST8e7vvFBPwgeUF4qLxGtEDTLxVmN-6JA"></a>
</div>

</div>

 <hr>
 <div id="reply">
 <h4>熱門回應</h4>
@foreach($replys->reverse() as $reply)
	<div id='reply-commend-zone'>
		
			<div id='reply-categories'>
				<span> {{$reply->id}} </span>
			</div>

			<div id='reply-content'>
				<p>{{$reply->content}}</p>

			</div>

		</a>
	</div>
	@endforeach
</div>


<!-- FB分享 -->
<script>
var fbhtml_url=window.location.toString();
var fbShare = "http://www.facebook.com/sharer/sharer.php?u="+fbhtml_url;

openPage = function() {
  location.href =fbhtml_url;
}
</script>

@endsection

@section('footer')

@endsection