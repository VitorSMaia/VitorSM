<?php

namespace App\Http\Livewire\Paragraph;

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
            'Conteudo' => 'content',
        ]
    ];

    public $idPost = null;

    protected $listeners = ['refreshTablePostParagraph' => '$refresh'];

    public function mount($id = null)
    {
        if($id) {
            $this->idPost = $id;
        }
    }

    public function getPostParagraphs()
    {
        $postParagraphsDB = PostParagraphs::query();

        if(!empty($this->state['search'])) {
            $postParagraphsDB->where('content', 'LIKE', "%{$this->state['search']}%");
        }
        if($this->idPost) {
            $postParagraphsDB->where('post_id',$this->idPost);
        }

        $postParagraphsDB = $postParagraphsDB->get();
        $this->state['paragraph'] = $postParagraphsDB;
    }

    public function updatedStateSearch()
    {
        $this->getPostParagraphs();
    }

    public function deletePost($id)
    {
        $postParagraphsDB = PostParagraphs::query()->findOrFail($id)->delete();
        if($postParagraphsDB) {
            $this->emit('refreshTablePostParagraph');
        }
    }

    public function render()
    {
        $this->getPostParagraphs();

        return view('livewire.paragraph.table');
    }
}
