<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;

#[Title('Login - Restro')]
class Login extends Component
{
    public string $pageTitle = 'Login';
    public $email;
    public $password;
    public function save()
    {
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|string|min:8',
        ]);
        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid credentials.');
            return;
        }
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
