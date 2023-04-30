<?php

namespace App\Http\Livewire\Posts;

use App\Models\User;
use App\Models\Post;
use App\Traits\ModalCenter;
use Livewire\Component;
use App\Http\Controllers\Posts\Form as PostFormController;

class Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Title' => 'title',
        ]
    ];

    protected $listeners = ['refreshTablePost' => '$refresh'];

    public function getPosts()
    {
        $postFormController = new PostFormController();
        $postFormControllerReturn = $postFormController->index($this->state['search']);

        if($postFormControllerReturn['status'] == 'success') {
            $this->state['posts'] = $postFormControllerReturn['data'];
        }
    }

    public function updatedStateSearch()
    {
        $this->getPosts();
    }

    public function deletePost($id)
    {
        $postFormController = new PostFormController();
        $postFormControllerReturn = $postFormController->delete($id);

        if($postFormControllerReturn['status'] == 'success') {
            $this->emit('refreshTablePost');
        }
    }

    public function render()
    {
        $this->getPosts();
       return view('livewire.posts.table');
    }
}
