<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomAuth\RegisterRequest;

class Register extends Component
{
    public $name, $email, $phone, $address, $gender , $whatsapp,$oldPassword, $password , $password_confirmation;

    public function getRules()
    {
        return (new RegisterRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $user = $this->validate();
        $data = User::create($user);
        Auth::guard("web")->login($data);
        return to_route('home');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
