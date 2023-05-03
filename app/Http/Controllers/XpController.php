<?php

namespace App\Http\Controllers;

use App\Models\Xp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class XpController extends Controller
{
    public function index($search = null) {

        $xpDB = new Xp();

        if(!empty($search)) {
            $xpDB = $xpDB->query()->where('company', 'LIKE', "%$search%");
        }

        $xpDB = $xpDB->get();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $xpDB
        ];
    }
    public function find($idXp = null) {

        $xpDB = new Xp();

        if($idXp) {
            $xpDB = $xpDB->findOrFail($idXp)->toArray();
        } else {
            $xpDB = [];
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $xpDB
        ];
    }
    public function updateOrCreate($idXp = null, $request) {

        $ValidatorRequest = Validator::make($request, [
            'company' => 'required',
            'image' => 'required',
            'url' => 'required',
            'office' => 'required',
            'description' => 'required',
            'dt_start' => 'required',
            'dt_end' => 'required|after:dt_start',

        ])->validate();

         $xpDB = new Xp();

        if($idXp) {
            $xpDB = $xpDB->find($idXp)->update($ValidatorRequest);
        }else {
            $xpDB = $xpDB->create($ValidatorRequest);
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $xpDB
        ];
    }
    public function delete($idXp = null) {

        $xpDB = Xp::query()->findOrFail($idXp)->delete();

        if($xpDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }
    public function list() {

        $xpDB = Xp::query()->limit(3)->orderBy('dt_end', 'desc')->get()->toArray();

        return [
            'status' => 'sucess',
            'code' => 200,
            'data' => $xpDB
        ];
    }
}
