<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){
        $title = 'FAQ';
        return view('frontend.pages.faq.index',[
            'title' => $title
        ]);
    }
}
