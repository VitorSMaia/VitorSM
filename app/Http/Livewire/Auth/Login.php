<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $showLoading = false;

    public $state;
    public $user_id;

    public function mount() {
        $this->user_id = auth()->id();
    }

    public function save() {
        $request = $this->state;

        $userDB = new User;
        $userDB = $userDB->where('email', $request['email'])->first();

        $auth = Auth::attempt($request);

        if ($auth) {
            $this->showLoading = true;
            sleep(1);
            return redirect()->route('/');
        }

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
