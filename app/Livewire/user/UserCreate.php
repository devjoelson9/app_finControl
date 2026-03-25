<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class UserCreate extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ];

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'remember_token' => Str::random(10),
        ]);

        $this->reset(['name', 'email', 'password', 'password_confirmation']);

        session()->flash('success', 'Usuário criado com sucesso.');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.user.user-create')
            ->layout('layouts.app', ['title' => 'Criar Usuário']);
    }
}
