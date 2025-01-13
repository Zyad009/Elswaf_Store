<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\SearchRequest;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class AdminUserController extends Controller
{
    public function index(){
        $users= User::paginate(20);
        return view("admin.pages.users.index" , compact("users"));
    }

    public function search(SearchRequest $request){
        $q =$request->validated();
        $search = $q["q"] ?? "";
        $users = User::where("phone" ,"LIKE" ,"%".$search."%")->paginate(20);

        return view("admin.pages.users.search" , compact("users" , "search"));
    }
}
