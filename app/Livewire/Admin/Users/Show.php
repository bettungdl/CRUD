<?php

namespace App\Livewire\Admin\Users;

use App\Models\User as User;
use Livewire\Component;
use Carbon\Carbon;

class Show extends Component
{
    public $userId = '';
    public $name = '';
    public $email = '';
    public $role = '';
    public $picture = '';
    public $created_at;
    public $color_tag;

    public function mount($id)
    {
        $this->getUserInfo($id);
    }

    public function render()
    {
        return view('livewire.admin.users.show');
    }

    public function getUserInfo($id)
    {
        $this->userId = $id;
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->picture = $user->profile_photo_url;
        $this->created_at = Carbon::parse($user->created_at)
            ->locale('es')
            ->translatedFormat('d \d\e F \d\e Y');

        if ($user->roles->first()->name == 'admin') {
            $this->role = 'Administrador';
            $this->color_tag = 'primary';
        } else {
            $this->role = 'Usuario';
            $this->color_tag = 'secondary';
        }
    }
}