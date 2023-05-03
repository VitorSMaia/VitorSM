<?php

namespace App\Http\Livewire\Paragraph;

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\PostParagraphs;
use App\Traits\ModalCenter;
use Livewire\Component;

class Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Content' => 'content',
        ]
    ];

    public $idPost = null;

    protected $listeners = ['refreshTablePostParagraph' => '$refresh'];

    public function mount($id = null)
    {
        if($id) {
            $this->idPost = $id;
            $this->getPostParagraphs();
        }
    }

    public function getPostParagraphs()
    {
        $postController = new PostController();
        $postControllerReturn = $postController->indexParagraph($this->state['search'], $this->idPost);

        if($postControllerReturn['status'] === 'success') {
            $this->state['paragraph'] = $postControllerReturn['data'];
        }

    }

    public function updatedStateSearch()
    {
        $this->getPostParagraphs();
    }

    public function deletePost($id)
    {
        $postController = new PostController();
        $postControllerReturn = $postController->deleteParagraph($id);

        $this->emit('refreshTablePostParagraph');
//        if($postControllerReturn['status'] === 'success') {
//            $this->getPostParagraphs();
//        }
    }

    public function render()
    {
        $this->getPostParagraphs();
        return view('livewire.paragraph.table');
    }
}
