<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $post = Post::latest()->get();
        return view('frontend.pages.artikel.index',[
            'post' => $post,
            'keyword' => NULL
        ]);
    }

    public function detail($slug){
        $item = Post::with('tags','category')->withCount('tags')->where('slug',$slug)->firstOrFail();
        return view('frontend.pages.artikel.detail',[
            'title' => $item->title,
            'item' => $item
        ]);
    }

    public function search()
    {
        $keyword = request('keyword');
        $post = Post::where('title','LIKE', '%' . $keyword . '%')->latest()->get();
        return view('frontend.pages.artikel.index',[
            'post' => $post,
            'keyword' => $keyword,
            'title' => $keyword
        ]);
    }
}
