<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUser extends Component
{
    use WithPagination;

    public $search;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user.search-user', ["users" => User::where("phone", "LIKE", "%" . $this->search . "%")
            ->orWhere("name", "LIKE", "%" . $this->search . "%")
            ->orderBy("id", "desc")->paginate(config("pagination.count"))]);
    }
}
