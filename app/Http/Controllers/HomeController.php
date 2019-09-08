<?php

namespace App\Http\Controllers;
use App\Category;
use App\Banner;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Fbpage;
use App\Contact;
use App\Logo;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('test',[
            'categories' => Category::all(),
            'banners' => Banner::first(),
            'latestArticle' => Article::orderBy('id', 'desc')->limit(3)->get(),
            'latestProduct' => Product::orderBy('id', 'desc')->limit(3)->get(),
            'articles' => Article::all(),
            'latestCategory' => Category::orderBy('id', 'desc')->first(),
            'users' =>  User::all(),
            'fbpage' => Fbpage::first(),
            'contact' => Contact::first(),
            'logos' => Logo::first(),
            ]);
    }


    public function product(){
        return view('product',[
            'products' => Product::all(),
        ]);
    }




}
