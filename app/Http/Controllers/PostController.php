<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostParagraphs;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Paragraph;

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

        $validatorRequest = Validator::make($request, [
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ])->validate();

        $postDB = new Post();

        if($idPost) {
            $postDB = $postDB->find($idPost)->update($validatorRequest);
        }else {
            $postDB = $postDB->create($validatorRequest);
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
    public function findPost($id = null) {

        $paragraphDB = PostParagraphs::query()
            ->where('post_id', $id)->orderBy('order', 'ASC')
            ->get()->toArray();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $paragraphDB
        ];
    }

    public function indexParagraph($search = '', $idPost = null) {

        $paragraphDB = PostParagraphs::query()->where('post_id', $idPost);

        if(!empty($search)) {
            $paragraphDB = $paragraphDB->query()->where('title', 'LIKE', "%$search%");
        }

        $paragraphDB = $paragraphDB->get();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $paragraphDB
        ];
    }

    public function findParagraph($id = null) {

        $paragraphDB = PostParagraphs::query()->findOrFail($id)->toArray();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $paragraphDB
        ];
    }

    public function deleteParagraph($id)
    {
        $postParagraphsDB = PostParagraphs::query()->findOrFail($id)->delete();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $postParagraphsDB
        ];
    }

    public function updateOrCreateParagraph($id = null, $request) {

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
}
