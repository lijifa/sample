<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
    	return '主页页面';
    }

    public function help(){
    	return "帮助页面";
    }

    public function about(){
    	return "关于我们页面";
    }
}
