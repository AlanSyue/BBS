<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('forgot-password',[
            'useCSS' =>'index',
            'h2Title' =>'最新文章',
            'classHome' =>'active',
            'classReg' =>'none',
            'classLog' =>'none'
        ]);
}
