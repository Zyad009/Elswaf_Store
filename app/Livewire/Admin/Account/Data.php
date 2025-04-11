<?php

namespace App\Livewire\Admin\Account;

use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Models\Admin;
use Livewire\Component;
use App\Models\CustomerService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class Data extends Component
{
    use WithFileUploads;
    use UploadImage;

    public $data;
    public $id, $table, $entityName;

    public $newImage, $image, $defaultImage;
    public $name, $email, $gender, $phone, $whatsapp, $address;
    public $oldPassword, $password, $password_confirmation;


    
    public function mount()
    {
        if (auth()->guard("admin")->check()) {
            $this->id = auth()->id();
            $this->table = "admins";
            $this->entityName = "Admin";
            $this->data = Admin::with('images')->find($this->id);
        } elseif (auth()->guard("customerService")->check()) {
            $this->id = auth()->id();
            $this->table = "customer_services";
            $this->entityName = "CustomerService";
            $this->data = CustomerService::with('images')->find($this->id);
        }
        $this->fill($this->data->only(['name', 'email', 'gender', 'phone', 'whatsapp', 'address']));
        $this->image = $this->data->images->first()?->main_image;


        if (isset($image)) {
            $image;
        } elseif ($this->gender == "male") {
            $this->defaultImage = config("default-image.male-image");
        } elseif ($this->gender == "female") {
            $this->defaultImage = config("default-image.female-image");
        }
    }


    public function rules()
    {
        $rules = [
            "phone" => [],
            'email' => [],
            "whatsapp" => [],
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:500',
        ];

        $rules["phone"] = [
            "required",
            "string",
            "regex:/^\+?[0-9\s\-\(\)]{10,20}$/",
            Rule::unique($this->table, "phone")->ignore($this->id)
        ];

        $rules["whatsapp"] = [
            "required",
            "string",
            "regex:/^\+?[0-9\s\-\(\)]{10,20}$/",
            Rule::unique($this->table, "whatsapp")->ignore($this->id)
        ];

        $rules["email"] = [
            "required",
            "email",
            "max:255",
            Rule::unique($this->table, "email")->ignore($this->id)
        ];

        return $rules;
    }

    public function passwordRules()
    {
        return [
            'oldPassword' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
        ];
    }

    // public function imageRules()
    // {
    //     return [
    //         "newImage" => "required|image|mimes:png,jpg,jpeg,gif|max:2048"
    //     ];
    // }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function uploadImage()
    {
        $this->validate(["newImage" => "required|image|mimes:png,jpg,jpeg,gif|max:2048"]);
        // $this->validate();

        if ($this->image && Storage::exists($this->image)) {
            // Storage::delete($this->image);
            $dir = dirName($this->image);
            Storage::deleteDirectory($dir);
        }
        $this->saveImages($this->entityName, $this->id, $this->name, $this->newImage);
        $this->image = $this->data->images->first()?->main_image;
        $this->reset('newImage');
        $this->dispatch("updatedImage");
        $this->dispatch("updatedNavImage");
    }

    public function deleteImage()
    {
        if ($this->image && Storage::exists($this->image)) {
            // Storage::delete($this->image);
            $dir = dirName($this->image);
            Storage::deleteDirectory($dir);
        }

        $this->data->images()->update(['main_image' => null]);

        $this->reset('newImage');
        $this->image = null;

        $this->dispatch("deletedImage");
        $this->dispatch("updatedNavImage");
    }


    public function updatedGender()
    {
        if ($this->gender == "male") {
            $this->defaultImage = config("default-image.male-image");
        } elseif ($this->gender == "female") {
            $this->defaultImage = config("default-image.female-image");
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $this->data->update($validatedData);
        $this->updatedGender();
        
        $this->reset("gender");
        $this->data->refresh();

        $this->dispatch("successUpdated");
        $this->dispatch("updatedNavImage");
    }


    public function submitPassword()
    {
        $newDataPassword = $this->validate($this->passwordRules());
        if (!Hash::check($newDataPassword["oldPassword"], $this->data->password)) {
            $this->dispatch("errorPassword");
            return;
        }

        $newPassword = Hash::make($newDataPassword["password"]);
        $this->data->update(["password" => $newPassword]);

        auth()->guard("admin")->logout();
        session()->flush();
        session()->regenerateToken();

        return to_route("login.index");
    }


    public function render()
    {
        return view('livewire.admin.account.data');
    }
}
