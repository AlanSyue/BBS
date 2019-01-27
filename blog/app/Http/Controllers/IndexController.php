<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

	public function home()
	{
		$news = \App\News::all();
		
		return view('index',compact('news'),[
			'useCSS' =>'index',
			'h2Title' =>'最新文章',
			'classHome' =>'active',
			'classReg' =>'none',
			'classLog' =>'none'


		]);
	}

	public function sign()
	{
		$news = \App\News::all();
		// Session::put('user_id', '$news[0]');

		// return Session;
		
		return view('sign-up',compact('news'),[
			'useCSS' =>'sign-up',
			'h2Title' =>'註冊會員',
			'classHome' =>'none',
			'classReg' =>'active',
			'classLog' =>'none'


		]);
	}



}
