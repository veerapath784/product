<?php

namespace App\Http\Controllers;
use App\Article;
use App\Banner;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('homepage',[
            'articles' => Article::orderBy('id','desc')->paginate('20'),
            'banners' => Banner::all()
            ]);
    }




}
