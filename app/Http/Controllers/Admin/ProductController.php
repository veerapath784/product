<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index()
    {

        return redirect()->away('http://www.project3.cmru.ac.th/60134740/admin/index.php');

    }

    public function adminpd()
    {

    }

}
