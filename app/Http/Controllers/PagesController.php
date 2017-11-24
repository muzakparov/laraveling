<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to Blog";
        return view("pages.index")->with("title",$title);
    }

    public function about(){
        $title="About Page";
        return view("pages.about",compact("title"));
    }

    public function services(){
        $services=["SEO", "Pagination", "Lazy Loading"];
        return view("pages.services")->with("services",$services);
    }
}
