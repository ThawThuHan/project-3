<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function showNews($id)
    {
        $news = News::find($id);
        $category = Category::find($news->category_id);
        $mostRead = $category->news()->orderBy('view_count', 'desc')->take(5)->get();
        $mostRecent = $category->news()->latest()->take(5)->get();
        $related = $category->news->filter(function ($element) use ($news) {
            return $news->id !== $element->id;
        })->take(4);
        return view('post', [
            "news" => $news,
            "mostRead" => $mostRead,
            "mostRecent" => $mostRecent,
            "related" => $related,
        ]);
    }

    public function getNewsByCategory(Category $category)
    {
        $latestNews = $category->news()->latest()->paginate(6);
        $popularNews = $category->news()->orderBy('view_count', 'desc')->get();
        return view('category_view', [
            "category" => $category,
            "latestNews" => $latestNews,
            "popularNews" => $popularNews,
        ]);
    }
}
