<?php

namespace App\Http\Controllers;
use App\Category;
use App\Banner;
use Illuminate\Http\Request;
use App\Article;


class HomeController extends Controller
{
    public function index()
    {
        return view('homepage',[
            'categories' => Category::all(),
            'banners' => Banner::all(),
            'latestArticle' => Article::orderBy('id', 'desc')->limit(4)->get(),
            'latestCategory' => Category::orderBy('id', 'desc')->first()
            ]);
    }




}
