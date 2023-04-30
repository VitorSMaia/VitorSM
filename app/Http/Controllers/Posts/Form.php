<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class Form extends Controller
{
    public function index($search = '')
    {
        $postDB = Post::query();

        if(!empty($search)) {
            $postDB->where('title', 'LIKE', "%$search%");
        }

        $postDB = $postDB->select('title', 'image', 'id')->get();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $postDB
        ];
    }

    public function findPost($idPost = null) {
        $postDB = new Post();

        if($idPost) {
            $postDB = $postDB->findOrFail($idPost)->toArray();
        } else {
            $postDB = [];
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $postDB
        ];
    }

    public function updateOrCreate($idPost = null, $request) {

        $postRequest = new PostRequest();

        $requestArray['title'] = $request['title'];
        $requestArray['detail'] = $request['detail'];
        $requestArray['image'] = $request['image'];

        $postRequestReturn = $postRequest->validate($requestArray);

        $postDB = new Post();

        if($idPost) {
            $postDB = $postDB->find($idPost)->update($requestArray);
        }else {
            $postDB = $postDB->create($requestArray);
        }

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $postDB
        ];
    }

    public function delete  ($idPost = null)
    {
        $postDB = Post::query()->findOrFail($idPost)->delete();
        if($postDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }
}
