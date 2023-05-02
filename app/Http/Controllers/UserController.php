<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function index($search = null) {

        $userDB = new User();

        if(!empty($search)) {
            $userDB = $userDB->query()->where('name', 'LIKE', "%$search%");
        }

        $userDB = $userDB->get()->toArray();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $userDB
        ];
    }
    public function find($idUser = null) {

        $userDB = new User();

        if($idUser) {
            $userDB = $userDB->findOrFail($idUser)->toArray();
        } else {
            $userDB = [];
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $userDB
        ];
    }
    public function updateOrCreate($idUser = null, $request) {

        $userDB = new User();

        $ValidatorRequest = Validator::make($request, [
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($idUser)],
            'password' => [
                Rule::requiredIf(function () use ($idUser) {
                    return is_null($idUser);
                }),
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ]
        ])->validate();

        if($idUser) {
            $userDB = $userDB->find($idUser)->update($ValidatorRequest);
        }else {
            $userDB = $userDB->create($ValidatorRequest);
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $userDB
        ];
    }
    public function delete($idUser = null) {

        $userDB = User::query()->findOrFail($idUser)->delete();

        if($userDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }

}
