<?php

namespace App\Http\Livewire\Posts;

use App\Traits\ModalCenter;
use Livewire\Component;
use App\Http\Controllers\Posts\Form as PostFormController;

class Form extends Component
{
    use ModalCenter;

    public $idPost;

    public $state = [
        'image' => ''
    ];

    protected $rules = [
        'state.title' => 'required|min:6',
        'state.detail' => 'required',
        'state.image' => 'required',
    ];

    public function mount($id = null) {
        if($id) {
            $this->idPost = $id;
            $this->state = $this->getPost();
        }
    }



    public function getPost()
    {
        $postFormController = new PostFormController;
        $postFormControllerReturn = $postFormController->findPost($this->idPost);

        if($postFormControllerReturn['status'] == 'success') {
            return $postFormControllerReturn['data'];
        }
    }

    public function updateOrCreate()
    {
        $validatedData = $this->validate()['state'];

        $postFormController = new PostFormController();
        $postFormControllerReturn = $postFormController->updateOrCreate($this->idPost, $validatedData);

        if($postFormControllerReturn['status'] == 'success') {
            $this->closeModal();
            $this->emit('refreshTablePost');
        }
    }

    public function render()
    {
        return view('livewire.posts.form');
    }
}
