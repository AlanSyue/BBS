<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

	public function home(Request $request)
	{
		$datas =  session('email');
		$news = \App\News::all();
		$users = \App\User::where('email',$datas)->first();
		
		return view('index',compact('datas','news','users'),[
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
		
		return view('sign-up',compact('news'),[
			'useCSS' =>'sign-up',
			'h2Title' =>'註冊會員',
			'classHome' =>'none',
			'classReg' =>'active',
			'classLog' =>'none'


		]);
	}

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



}
