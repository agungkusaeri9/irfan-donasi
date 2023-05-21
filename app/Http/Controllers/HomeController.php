<?php

namespace App\Http\Controllers;

use App\Helper\Wablas;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Program;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Selamat Datang di website resmi kami';
        $slider = Slider::get();
        $items = Program::active()->with('category')->withCount('transactions_success')->limit(12)->inRandomOrder()->get();
        $post = Post::limit(4)->get();
        return view('frontend.pages.home', [
            'posts' => $post,
            'title' => $title,
            'slider' => $slider,
            'items' => $items,
        ]);
    }

    public function campaign()
    {
        $slider = Slider::get();
        $program = Program::active()->get();
        $post = Post::get();
        return view('frontend.pages.campaign.campaign', [
            'post' => $post,
            'slider' => $slider,
            'program' => $program
        ]);
    }

    public function detail($id)
    {
        $program = Program::where('id', $id)->get();
        return view('frontend.pages.campaign.detail-campaign', [
            'program' => $program
        ]);
    }

    public function donation($id)
    {
        $program = Program::where('id', $id)->get();
        return view('frontend.pages.donation.donation', [
            'program' => $program
        ]);
    }
}
