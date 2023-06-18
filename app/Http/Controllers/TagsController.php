<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tags::all();
        return view('backend.tag.tag', compact('tags'));
    }

    public function create()
    {
        return view('backend.tag.create');

    }
    public function store(Request $request)
    {
        $tags = new Tags();

        $tags->name  = $request->name;
        $tags->slug  = $request->slug;

        $tags->save();
        $notification = array(
            'message' =>' Store Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('tag.index')->with($notification);


    }

    public function edit($id)
    {
        $tags = Tags::find($id);

        return view('backend.tag.create',compact('tags'));

    }

    public function update(Request $request, $id)
    {
        $tags = Tags::find($id);

        $tags->name  = $request->name;
        $tags->slug  = $request->slug;

        $tags->save();
        $notification = array(
            'message' =>' Update Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('tag.index')->with($notification);

    }

    public function destroy($id)
    {
        $tags = Tags::find($id);
        $tags->delete();
        $notification = array(
            'message' =>' Delete Successfully ',
            'alert-type' =>'success'
        );

        return redirect()->route('tag.index')->with($notification);

    }
}
