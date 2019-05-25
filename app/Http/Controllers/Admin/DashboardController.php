<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Banner;

use App\Article;
use App\User;
use App\Fbpage;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        return view('admin.dashboard', [
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
