<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
{
    $featured          = News::where('subcategory_id', 1)->latest('id')->first();
    $news              = News::where('subcategory_id', 2)->latest('id')->take(4)->get();
    $sportsnews        = News::where('category_id', 2)->latest('id')->take(4)->get();
    $technologynews    = News::where('category_id', 3)->latest('id')->take(4)->get();
    $businessnews      = News::where('category_id', 3)->latest('id')->take(4)->get();
    $entertainmentnews = News::where('category_id', 3)->latest('id')->take(4)->get();

    // Latest News

    $latestTopNews = News::latest('id')->first();
    $latestTopsix = News::latest('id')->skip(1)->take(6)->get();

    // All Category
    $categories = Category::all();

    // Tags
    $tags = Tags::all();

    // Top post
    $toppopular = News::orderBy('post_view', 'desc')->first();
    $popularnews = News::orderBy('post_view', 'desc')->skip(1)->take(5)->get();

    return view('frontend.index', compact('news', 'featured','sportsnews','technologynews'
                                           ,'businessnews','entertainmentnews','latestTopNews',
                                           'latestTopsix','categories','tags','popularnews','toppopular'));
}

    public function show($id)
    {
        $view = News::find($id);
        $view->increment('post_view');

        return view('frontend.postshow');


    }
}
