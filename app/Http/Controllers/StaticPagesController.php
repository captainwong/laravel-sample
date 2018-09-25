<?php

namespace App\Http\Contollers;

use Illuminate\Http\Requests;

class StaticPagesController extends Controller
{
    public function home(){
        return '主页';
    }

    public function help(){
        return '帮助页';
    }

    public function about(){
        return '关于页';
    }
}

?>