<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

        public function create(){
            return view('user.login.create');
        }
        public  function store(){

        }
        //请求百度
        public function baidu(){

}



}
