<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::orderBy('order')->get();
        return view('menu.index', compact('menuItems'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'order' => 'nullable|integer',
        ]);

        MenuItem::create($request->all());

        return redirect()->route('menu.index')->with('success', 'Menu item created successfully');
    }

    public function edit($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        return view('menu.edit', compact('menuItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'order' => 'nullable|integer',
        ]);

        $menuItem = MenuItem::findOrFail($id);
        $menuItem->update($request->all());

        return redirect()->route('menu.index')->with('success', 'Menu item updated successfully');
    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();

        return redirect()->route('menu.index')->with('success', 'Menu item deleted successfully');
    }
}
