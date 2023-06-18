<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::orderBy('order')->get();
        return view('frontend.contact.contact',compact('menuItems'));
    }

    


}
