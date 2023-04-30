<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostParagraphs;

class PostController extends Controller
{
    public function index($search = null) {

        $postDB = Post::query()->select('title', 'image', 'id');

        if(!empty($search)) {
            $postDB = $postDB->query()->where('title', 'LIKE', "%$search%");
        }

        $postDB = $postDB->get();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $postDB
        ];
    }
    public function find($idPost = null) {

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

        $requestArray['title'] = $request['title'];
        $requestArray['detail'] = $request['detail'];
        $requestArray['image'] = $request['image'];

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
    public function delete($idPost = null) {

        PostParagraphs::query()->where('post_id', $idPost)->delete();
        $postDB = Post::query()->findOrFail($idPost)->delete();

        if($postDB) {
            return [
                'status' => 'success',
                'code' => 200,
            ];
        }
    }
    public function list() {
        $postDB = Post::query()->limit(3)->orderBy('id', 'desc')->get()->toArray();

        return [
            'status' => 'sucess',
            'code' => 200,
            'data' => $postDB
        ];
    }
}
