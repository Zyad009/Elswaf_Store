<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomAuth\LoginRequest;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public $email , $password;
    
    
    public function getRules()
    {
        return (new LoginRequest())->rules();
    }

    public function updatedEmail()
    {
        $this->validateOnly("email");
    }

    public function updatedPassword()
    {
        $this->validateOnly("password");
    }

    public function submit(){
        $data = $this->validate();
        if (Auth::guard('admin')->attempt($data)) {

            $user = Auth::guard('admin')->user();
            Auth::login($user);

            return to_route('admin-home');

        } elseif (Auth::guard('web')->attempt($data)) {

            return redirect()->route('home');
        } else {
            $this->reset();
            throw ValidationException::withMessages([
                'email_not_correct' => trans('auth.failed'),
            ]);
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
