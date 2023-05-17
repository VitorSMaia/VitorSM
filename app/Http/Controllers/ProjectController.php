<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($search = null) {

        $projectDB = new Project();

        if(!empty($search)) {
            $projectDB = $projectDB->query()->where('company', 'LIKE', "%$search%");
        }

        $projectDB = $projectDB->get();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $projectDB
        ];
    }
    public function find($idProject = null) {

        $projectDB = new Project();

        if($idProject) {
            $projectDB = $projectDB->findOrFail($idProject)->toArray();
        } else {
            $projectDB = [];
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $projectDB
        ];
    }
    public function updateOrCreate($idProject = null, $request) {

        $ValidatorRequest = Validator::make($request, [
            'company' => 'required',
            'image' => 'required',
            'url' => 'required',
            'office' => 'required',
            'description' => 'required',
            'dt_start' => 'required',
            'dt_end' => 'required|after:dt_start',

        ])->validate();

        $projectDB = new Project();

        if($idProject) {
            $projectDB = $projectDB->find($idProject)->update($ValidatorRequest);
        }else {
            $projectDB = $projectDB->create($ValidatorRequest);
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $projectDB
        ];
    }
    public function delete($idProject = null) {

        $projectDB = Xp::query()->findOrFail($idProject)->delete();

        if($projectDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }
    public function list() {

        $projectDB = Xp::query()->limit(3)->orderBy('dt_end', 'desc')->get()->toArray();

        return [
            'status' => 'sucess',
            'code' => 200,
            'data' => $projectDB
        ];
    }
}
