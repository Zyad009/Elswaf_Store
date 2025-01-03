<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index(){
        $messages = Message::paginate(10);
        return view("admin.pages.message.index" ,compact("messages"));
    }

    public function destroy(Message $message){
        $message->delete();
        return back()->with('success', 'message deleted successfully');
    }
}
