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
        $program1 = Program::with('category')->withCount('transactions_success')->whereHas('category', function ($query) {
            return $query->where('name', 'Donasi Pasien');
        })->limit(3)->latest()->get();
        $program2 = Program::with('category')->withCount('transactions_success')->inRandomOrder()->limit(3)->get();
        $program3 = Program::with('category')->withCount('transactions_success')->inRandomOrder()->limit(3)->get();

        $post = Post::limit(4)->get();
        return view('frontend.pages.home', [
            'posts' => $post,
            'title' => $title,
            'slider' => $slider,
            'program1' => $program1,
            'program2' => $program2,
            'program3' => $program3
        ]);
    }

    public function campaign()
    {
        $slider = Slider::get();
        $program = Program::get();
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
