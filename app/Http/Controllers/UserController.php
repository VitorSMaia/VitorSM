<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidate;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function updateOrCreate(UserValidate $request) {
//        $userValidate = new UserValidate();
//        $userValidate->
        dd($request->validated());
        $requestArray['name'] = $request['name'];
        $requestArray['email'] = $request['email'];
        $requestArray['password'] = $request['password'];

        $userDB = new User();

        if($idUser) {
            $userDB = $userDB->find($idUser)->update($requestArray);
        }else {
            $userDB = $userDB->create($requestArray);
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
