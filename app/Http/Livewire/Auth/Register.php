<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $state;
    public $showLoading = false;

    protected $rules = [
        'state.name' => 'required|min:6',
        'state.email' => 'required|email',
        'state.password' => 'required|confirmed|min:6',
    ];
 
    public function save()
    {
        $validatedData = $this->validate();
        $data = $this->state;
        $userDB = User::query()->create($data);
        
        $register['email'] = $userDB['email'];
        $register['password'] = $userDB['password'];
        
        Auth::attempt($register);

        redirect()->route('/');
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
