<?php

namespace App\Livewire\Admin\Users;

use App\Models\User as User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class Edit extends Component
{
    public $users = '';
    public $roles;
    public $userId = '';
    public $message = '';
    public $name = '';
    public $email = '';
    public $role = '';
    public $password = '';
    public $tag;

    protected $rules = [
        'name' => 'required|string|min:10|max:120',
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'role.required' => 'Debe seleccionar un rol.',
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo es obligatorio.',
        'email.email'    => 'El correo no es válido.',
        'email.unique'    => 'El correo ya existe.',
        'password.required' => 'La contraseña es obligatoria.',
        'password.min'      => 'La contraseña debe tener al menos 6 caracteres.',
    ];
    public function updateData()
    {
        $this->validate([
            'name'  => 'required',
            'role'  => 'required',
            'password' => $this->userId ? 'nullable|min:6' : 'required|min:6',

            'email' => $this->userId
                ? 'required|email|unique:users,email,' . $this->userId
                : 'required|email|unique:users,email',
        ]);

        if ($this->userId) {
            $user = User::findOrFail($this->userId);
            $user->name = $this->name;
            $user->email = $this->email;

            if ($this->password) {
                $user->password = Hash::make($this->password);
            }

            $user->save();

            $user->syncRoles([$this->role]);
        } else {
            $user = User::create([
                'name'     => $this->name,
                'email'    => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $user->assignRole($this->role);
        }
        return redirect()->route('admin.users')
            ->with('success', 'Usuario guardado correctamente.');
    }

    public function mount($id = null)
    {
        $this->tag = 'Crear Nuevo';
        if ($id) {
            $this->userId = $id;
            $user = User::findOrFail($id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->role = $user->roles->first()->name ?? null;
            $this->tag = 'Editar';
        }

        $this->getRoles();
    }

    public function render()
    {
        return view('livewire.admin.users.edit');
    }

    public function getRoles()
    {
        $this->roles = Role::all();
    }
}