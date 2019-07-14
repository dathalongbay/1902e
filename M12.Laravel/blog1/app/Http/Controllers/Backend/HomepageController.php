<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    //

    public function index() {
        return view('simpleadmin.homepage.homepage1');
    }
}
