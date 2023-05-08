<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function loginLaravel(Request $request)
    {
        $request = $request->all();

        $ValidatorRequest = Validator::make($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'g-recaptcha-response' => 'sometimes',
            'h-captcha-response' => 'sometimes'
        ])->validate();

            $token = $ValidatorRequest['h-captcha-response'];
            unset($ValidatorRequest['h-captcha-response']);
            unset($ValidatorRequest['g-recaptcha-response']);

            $response = Http::post('https://hcaptcha.com/siteverify?&secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token)->json();

                dd($response);
            if($response['success']) {

                $auth = Auth::attempt($ValidatorRequest);

                if ($auth) {
                    $this->showLoading = true;
                    sleep(1);
                    return redirect()->route('dashboard');
                }
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
            return [
                'status' => 'success'
            ];
        }

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
