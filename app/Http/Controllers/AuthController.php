<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function loginLaravel(Request $request)
    {
        $ValidatorRequest = Validator::make($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'h-captcha-response' => 'required|captcha'
        ])->validate();

        $auth = Auth::attempt($ValidatorRequest);

        if ($auth) {
            $this->showLoading = true;
            sleep(1);
            return redirect()->route('dashboard');
        }

    }

    public function login($request)
    {
        $ValidatorRequest = Validator::make($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
//            'g-recaptcha-response' => 'required|captcha',
//            'h-captcha-response' => 'required|captcha'
        ])->validate();

        $auth = Auth::attempt($ValidatorRequest);

        if ($auth) {
            $this->showLoading = true;
            sleep(1);
            return redirect()->route('dashboard');
        }

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
