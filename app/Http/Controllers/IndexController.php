<?php

namespace App\Http\Controllers;

use App\Mail\SendContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function sendContact($request)
    {
        $ValidatorRequest = Validator::make($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ])->validate();

        Mail::to('vitor.smaia1@gmail.com')
            ->send(new SendContact($ValidatorRequest));

        return [
            'status' => 'success',
            'code' => 200,
            'data' => 'OK'
        ];
    }
}
