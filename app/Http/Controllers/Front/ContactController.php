<?php

namespace App\Http\Controllers\Front;

use App\Models\Admin;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Notifications\MessageNotification;

class ContactController extends Controller
{
//     public function index()
//     {
//         return view("front.contact");
//     }

    public function index()
    {
        return view("front.pages.contact");
    }

    public function store(ContactRequest $request){
        $message = $request->validated();
         $data = Message::create($message);
        $admins = Admin::all();
        foreach($admins as $admin){
            $admin->notify(new MessageNotification($data));
        }
        return redirect("contact")->with("success" , "your messsage has been sent successfully");
    }
}
