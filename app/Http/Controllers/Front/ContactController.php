<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("front.contact");
    }

    public function send(ContactRequest $request){
        $message = $request->validated();
        Message::create($message);

        return redirect("contact")->with("success" , "your messsage has been sent successfully");
    }
}
