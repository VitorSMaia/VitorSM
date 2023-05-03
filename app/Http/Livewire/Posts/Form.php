<?php

namespace App\Http\Livewire\Posts;

use App\Http\Controllers\PostController;
use App\Traits\ModalCenter;
use Livewire\Component;

class Form extends Component
{
    use ModalCenter;

    public $idPost;

    public $state = [];

    public function mount($id = null) {
        if($id) {
            $this->idPost = $id;
            $this->state = $this->getPost();
        }
    }

    public function getPost() {
        $postController = new PostController;
        $postControllerReturn = $postController->find($this->idPost);

        if($postControllerReturn['status'] === 'success') {
            return $postControllerReturn['data'];
        }
    }

    public function updateOrCreate() {
        $request = $this->state;

        $postController = new PostController();
        $postControllerReturn = $postController->updateOrCreate($this->idPost, $request);

        if($postControllerReturn['status'] == 'success') {
            $this->closeModal();
            $this->emit('refreshTablePost');
        }
    }

    public function render() {
        return view('livewire.posts.form');
    }
}
