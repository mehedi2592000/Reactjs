<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function Profile()
    {
        $names=array("mr top","mr y");
        return View('Profile')->with('name',$names);
    }

    public function teacherDash(){
        return view('pages.teacherDash');

    }
}
