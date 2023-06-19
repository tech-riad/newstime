<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('backend.subcategory.subcategory',compact('subcategories'));
    }
    public function create()
    {
        return view('backend.subcategory.create');

    }
    public function store(Request $request)
    {
        $subcategories = new Subcategory();

        $subcategories->name  = $request->name;

        $subcategories->save();
        $notification = array(
            'message' =>' Store Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('admin.subcategory.index')->with($notification);


    }

    public function edit($id)
    {
        $subcategories = Subcategory::find($id);

        return view('backend.subcategory.create',compact('subcategories'));

    }

    public function update(Request $request, $id)
    {
        $subcategories = Subcategory::find($id);

        $subcategories->name  = $request->name;
        $subcategories->save();
        $notification = array(
            'message' =>' Update Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('admin.subcategory.index')->with($notification);

    }

    public function destroy($id)
    {
        $subcategories = Subcategory::find($id);
        $subcategories->delete();
        $notification = array(
            'message' =>' Delete Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('admin.subcategory.index')->with($notification);

    }


}
