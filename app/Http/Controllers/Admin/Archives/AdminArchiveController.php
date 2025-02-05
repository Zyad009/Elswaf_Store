<?php

namespace App\Http\Controllers\Admin\Archives;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArchiveController extends Controller
{
    public function index() 
    {
        return view("admin.pages.archives.index");
    }
}
