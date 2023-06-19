<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $setting = GeneralSetting::first();

        return view('backend.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image'                             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $setting = GeneralSetting::find($id);

        if ($image = $request->file('image')) {
            $destinationPath = 'setting/images/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();

            // Move the uploaded image to the storage directory
            $image->move($destinationPath, $imageName);

            // Save the image path in the database
            $setting->image = $destinationPath . $imageName;
        }

        $setting->name       = $request->name;
        $setting->email      = $request->email;
        $setting->phone      = $request->phone;
        $setting->facebook   = $request->facebook;
        $setting->instagram  = $request->instagram;
        $setting->twitter    = $request->twitter;
        $setting->linkdein   = $request->linkdein;
        $setting->youtube    = $request->youtube;

        $setting->save();

        return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}
