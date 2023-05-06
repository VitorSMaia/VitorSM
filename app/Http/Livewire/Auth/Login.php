<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Login extends Component
{
    public $showLoading = false;

    public $state = [];
    public $user_id;
    public $captcha = 0;

    public function mount() {
        $this->user_id = auth()->id();
    }

    public function updatedCaptcha($token = null)
    {
        $response = Http::post('https://hcaptcha.com/siteverify?&secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);

        dd($response->json(), $token);
        $this->captcha = $response->json()['score'];

        if (!$this->captcha > .3) {
            $this->save();
        } else {
            return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }
    }

    public function save() {
        $request = $this->state;

        $authController = new AuthController();

        $authControllerReturn =$authController->login($request);

        if($authControllerReturn['status'] === 'success') {
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
