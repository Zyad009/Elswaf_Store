<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $users= User::paginate(20);
        return view("admin.pages.users.index" , compact("users"));
    }
}
