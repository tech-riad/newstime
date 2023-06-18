<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.category', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');

    }
    public function store(Request $request)
    {
        $categories = new Category();

        $categories->category_name  = $request->category_name;
        $categories->slug           = $request->category_name;
        $categories->title          = $request->title;
        $categories->description    = $request->description;

        $categories->save();
        $notification = array(
            'message' =>' Store Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('category.index')->with($notification);


    }

    public function edit($id)
    {
        $categories = Category::find($id);

        return view('backend.category.create',compact('categories'));

    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);

        $categories->category_name  = $request->category_name;
        $categories->slug           = $request->category_name;
        $categories->title          = $request->title;
        $categories->description    = $request->description;

        $categories->save();
        $notification = array(
            'message' =>' Update Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('category.index')->with($notification);

    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        $notification = array(
            'message' =>' Delete Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('category.index')->with($notification);

    }
}
