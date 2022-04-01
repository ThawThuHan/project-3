<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $breakingNews = News::with('category')->where('is_hot', true)->take(4)->get();
        $latestNews = News::latest()->paginate(10);
        $popularNews = News::orderBy('view_count', 'desc')->take(7)->get();

        return view('home', [
            'breakingNews' => $breakingNews,
            'latestNews' => $latestNews,
            'popularNews' => $popularNews,
        ]);
    }
}
