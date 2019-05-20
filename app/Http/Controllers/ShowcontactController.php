<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ShowcontactController extends Controller
{
    public function index()
    {
        return view('showcontact',[

            'contact' => Contact::first(),
            ]);
    }
}
