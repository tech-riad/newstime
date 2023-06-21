<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\News;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    public function index()
    {
        $news          = News::orderBy('id', 'desc')->get();
        $setting       = GeneralSetting::first();

        return view('backend.news.news',compact('news','setting'));

    }

    public function create()
    {
        $categories    = Category::all();
        $subcategories = Subcategory::all();


        return view('backend.news.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title'       => 'required',
        'description' => 'required',
    ]);

    $news = new News();

    if ($image = $request->file('image')) {
        $destinationPath = 'public/images/';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();

        // Move the uploaded image to the storage directory
        $image->move($destinationPath, $imageName);

        // Save the image path in the database
        $news->image = $destinationPath . $imageName;
    }

    $news->title           = $request->title;
    $news->category_id     = $request->category_id;
    $news->subcategory_id  = $request->subcategory_id;
    $news->description     = $request->description;

    $news->status          = $request->status ? true : false;

    $news->save();

    $notification = [
        'message' => 'Upload Successfully',
        'alert-type' => 'success'
    ];

    return redirect()->route('admin.news.index')->with($notification);
}

    public function edit($id)
    {
        $categories    = Category::all();
        $subcategories = Subcategory::all();
        $news          = News::find($id);



        return view('backend.news.create', compact('categories', 'subcategories', 'news'));
    }


    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $request->validate([
                'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Delete the old image if it exists
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $image          = $request->file('image');
            $imageName      = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/images'), $imageName);

            $news->image    = 'public/images/' . $imageName;
        }

        $news->title          = $request->title;
        $news->category_id    = $request->category_id;
        $news->subcategory_id = $request->subcategory_id;
        $news->description    = $request->description;
        $news->status         = $request->has('status');

        $news->save();

        $notification = [
            'message' => 'News updated successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.news.index')->with($notification);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

    // Delete the image if it exists
    if ($news->image && file_exists(public_path($news->image))) {
        unlink(public_path($news->image));
    }

    $news->delete();

    $notification = [
        'message' => 'News deleted successfully',
        'alert-type' => 'success',
    ];

    return redirect()->route('admin.news.index')->with($notification);

    }

}
