<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view(view: 'home.index');
    }

    public function test($id)
    {
        echo "Id Number :", $id;
    }

}
