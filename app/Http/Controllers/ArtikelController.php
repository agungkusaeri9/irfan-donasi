<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('frontend.pages.artikel.index',[
            'posts' => $posts,
            'keyword' => NULL,
            'title' => 'Berita Terbaru'
        ]);
    }

    public function detail($slug){
        $item = Post::with('category')->where('slug',$slug)->firstOrFail();
        return view('frontend.pages.artikel.show',[
            'title' => $item->title,
            'post' => $item
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
