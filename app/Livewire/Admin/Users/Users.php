<?php

namespace App\Livewire\Admin\Users;

use App\Models\User as ModelsUser;
use Livewire\Component;

class Users extends Component
{
    public $users = '';

    public function mount()
    {
        $this->getUsers();
    }

    public function render()
    {
        return view('livewire.admin.users.users');
    }

    public function getUsers()
    {
        $this->users = ModelsUser::all();
    }
}