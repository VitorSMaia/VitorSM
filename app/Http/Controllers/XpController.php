<?php

namespace App\Http\Controllers;

use App\Models\Xp;
use Illuminate\Http\Request;

class XpController extends Controller
{
    public function index($search = null)
    {
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

        $requestArray['company'] = $request['company'];
        $requestArray['image'] = $request['image'];
        $requestArray['url'] = $request['url'];
        $requestArray['office'] = $request['office'];
        $requestArray['description'] = $request['description'];
        $requestArray['dt_start'] = $request['dt_start'];
        $requestArray['dt_end'] = $request['dt_end'];

        $xpDB = new Xp();

        if($idXp) {
            $xpDB = $xpDB->find($idXp)->update($requestArray);
        }else {
            $xpDB = $xpDB->create($requestArray);
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $xpDB
        ];
    }

    public function delete  ($idXp = null)
    {
        $xpDB = Xp::query()->findOrFail($idXp)->delete();

        if($xpDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }

    public function list()
    {
         $xpDB = Xp::query()->limit(3)->orderBy('dt_end', 'desc')->get()->toArray();

        return [
            'status' => 'sucess',
            'code' => 200,
            'data' => $xpDB
        ];
    }
}
