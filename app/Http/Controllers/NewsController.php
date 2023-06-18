<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Subcategory;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('backend.news.news',compact('news'));

    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('backend.news.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);

        dd($request->all());
        $news = new News();

        $image = $request->file('image');
        $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);

        $news->title = $request->title;
        $news->category_id = $request->category_id;
        $news->description = $request->description;


    }

}
