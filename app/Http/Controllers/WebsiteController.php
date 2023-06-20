<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\MenuItem;
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

    $latestTopNews     = News::latest('id')->first();
    $latestTopsix      = News::latest('id')->skip(1)->take(6)->get();

    // All Category
    $categories        = Category::all();

    // Tags
    $tags              = Tags::all();

    // Top post
    $toppopular        = News::orderBy('post_view', 'desc')->first();
    $popularnews       = News::orderBy('post_view', 'desc')->skip(1)->take(5)->get();

    // Menu
    $menuItems         = MenuItem::orderBy('order')->get();

    // General Seeting
    $setting = GeneralSetting::first();


    return view('frontend.index', compact('news', 'featured','sportsnews','technologynews'
                                           ,'businessnews','entertainmentnews','latestTopNews',
                                           'latestTopsix','categories','tags','popularnews','toppopular','menuItems','setting'));
}

    public function show($id)
    {
        $menuItems   = MenuItem::orderBy('order')->get();
        $view        = News::find($id);
        $view->increment('post_view');

        $setting = GeneralSetting::first();
        $categories  = Category::all();
        $tags        = Tags::all();

        return view('frontend.postshow',compact('menuItems', 'view','categories','tags','setting'));


    }



    public function showByCategory($category)
    {
        $menuItems   = MenuItem::orderBy('order')->get();
        $category = Category::where('category_name', $category)->firstOrFail();
        $news = News::where('category_id', $category->id)->get();
        $setting = GeneralSetting::first();
        return view('frontend.news.categorynews', compact('news','menuItems','setting'));
    }
}
