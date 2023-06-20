<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::orderBy('order')->get();
        return view('backend.menu.index', compact('menuItems'));
    }

    public function create()
    {
        // $menuItem = MenuItem::all();
        $categories = Category::all();
        return view('backend.menu.create', compact('categories'));
    }
    // store

    public function store(Request $request)

     {
        $request->validate([
            'title'      => 'required',
            'type'       => 'required|in:url,category',
            'url'        => 'nullable',
            'category_id'=> 'nullable|exists:categories,id',
            'order'      => 'nullable|integer',
        ]);

        // if($request->type == 'category')
        // {
        //     $request->merge([
        //         'url' => '/news/'.$request->category,
        //     ]);
        // }

        MenuItem::create($request->all());

        return redirect()->route('admin.menu.index')->with('success', 'Menu item created successfully');
    }
// edit
    public function edit($id)
    {
        $categories  = Category::all();
        $menuItem    = MenuItem::findOrFail($id);
        return view('backend.menu.create', compact('menuItem','categories'));
    }

// Update

   public function update(Request $request, $id)
{
    $request->validate([
        'title'      => 'required',
        'type'       => 'required|in:url,category',
        'url'        => 'nullable',
        'category'   => 'nullable|exists:categories,slug',
        'order'      => 'nullable|integer',
    ]);

    $menuItem                = MenuItem::findOrFail($id);
    $menuItem->title         = $request->title;
    $menuItem->type          = $request->type;
    $menuItem->url           = $request->url;
    $menuItem->category_id   = $request->category_id;
    $menuItem->order         = $request->order;
    $menuItem->save();

    return redirect()->route('admin.menu.index')->with('success', 'Menu item updated successfully');
}

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu item deleted successfully');
    }
}
