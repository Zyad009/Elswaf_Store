<?php

namespace App\Http\Controllers\Admin\Account;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomerService;
use Illuminate\Support\Facades\Auth;

class AdminAccountController extends Controller
{
    public function index()
    {
        return view('admin.pages.account.index');
    }
}
