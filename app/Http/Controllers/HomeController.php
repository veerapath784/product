<?php

namespace App\Http\Controllers;
use App\Category;
use App\Banner;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Fbpage;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage',[
            'categories' => Category::all(),
            'banners' => Banner::all(),
            'latestArticle' => Article::orderBy('id', 'desc')->limit(4)->get(),
            'articles' => Article::all(),
            'latestCategory' => Category::orderBy('id', 'desc')->first(),
            'users' =>  User::all(),
            'fbpage' => Fbpage::first(),
            ]);
    }




}
