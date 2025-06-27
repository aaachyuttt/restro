<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;

#[Title('Register - Restro')]
class Register extends Component
{
    public string $pageTitle = 'Register';
    public $name;
    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        auth()->login($user);
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
