<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{



	// 首頁
	public function home(Request $request)
	{
		$news = \App\News::all()->take(2);
		$count = \App\News::all()->count();
		$typearry = ['1'=>'心情','2'=>'分享','3'=>'提問'];

		return view('index',compact('news','typearry','count'),[
			'page'=>request('page'),
			'useCSS' =>'index',
			'h2Title' =>'最新文章',
			'classHome' =>'active',
			'classReg' =>'none',
			'classLog' =>'none'
		]);
	}

	// 註冊
	public function sign()
	{
		$news = \App\News::all();
		
		return view('sign-up',compact('news'),[
			'useCSS' =>'sign-up',
			'h2Title' =>'註冊會員',
			'classHome' =>'none',
			'classReg' =>'active',
			'classLog' =>'none'


		]);
	}

	// 登入
	public function login()
	{
		$users = \App\User::all();
	
		return view('login',compact('users'),[
			'useCSS' =>'login',
			'h2Title' =>'登入會員',
			'classHome' =>'none',
			'classReg' =>'none',
			'classLog' =>'active'
		]);
	}

	// 會員中心
	public function member()
	{
		$userID = Auth::id();
		$users = \App\User::all();
		$news = \App\News::where('user_id', $userID)->count();
		return view('member-index',compact('users','news'),[
			'useCSS' =>'member-index',
			'h2Title' =>'登入會員',
			'classHome' =>'none',
			'classReg' =>'active',
			'classLog' =>'none'
		]);
	}

	// 發文
	public function ask()
	{
		$users = \App\User::all();
	
		return view('ask',compact('users'),[
			'useCSS' =>'ask',
			'h2Title' =>'發表文章',
			'classHome' =>'none',
			'classReg' =>'none',
			'classLog' =>'none'
		]);
	}

	public function askpost(Request $request)
	{
		$data = $request;
		$news = \App\News::all();
		\App\News::create([
			'user_id' => $data['user_id'],
			'type' => $data['type'],
		    'subject' => $data['subject'],
		    'content' => $data['content'],

		]);

		return redirect()->route('index');
	
	}

	public function postID(Request $request, $pid = null)
	{
		$typearry = ['1'=>'心情','2'=>'分享','3'=>'提問'];
		$users = \App\User::all();
		$news = \App\News::where('id', $pid)->first();
		$replys = \App\reply::where('news_id', $pid)->get();
		return view('post',compact('users','news','typearry','replys'),[
			'useCSS' =>'post',
			'h2Title' =>'文章內頁',
			'classHome' =>'none',
			'classReg' =>'none',
			'classLog' =>'none'
		]);
	
	}

	public function reply(Request $request, $pid = null)
	{
		$data = $request;

		\App\reply::create([
			'news_id' => $data['news_id'],
			'content' => $data['content'],
		]);
		return redirect()->back();
	
	}



}
