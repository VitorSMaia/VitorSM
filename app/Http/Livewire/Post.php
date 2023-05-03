<?php

namespace App\Http\Livewire;

use App\Http\Controllers\PostController;
use Livewire\Component;
use App\Models\PostParagraphs;
use StdClass;


class Post extends Component
{
    public $postID;

    public function mount($id = null) {
        if($id) {
            $this->postID = $id;
        }else {
            return 404;
        }
    }

    public function getParagraphs() {

        $postController = new PostController();
        $postControllerReturn = $postController->findPost($this->postID);

        if($postControllerReturn) {
            return $postControllerReturn['data'];
        }
    }

    public function render()
    {
        $response = new StdClass;
        $response->paragraphs = $this->getParagraphs();

        return view('livewire.post', ['response' => $response]);
    }
}
