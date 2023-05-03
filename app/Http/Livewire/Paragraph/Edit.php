<?php

namespace App\Http\Livewire\Paragraph;

use App\Http\Controllers\PostController;
use App\Models\PostParagraphs;
use Livewire\Component;

class Edit extends Component
{
    public $idParagraph;
    public $idPost;

    public $state = ['content' => ''];

    public function mount($id = null, $idParagraph = null)
    {
        if($id) {
            $this->idPost = $id;
        }

        if($idParagraph) {
            $this->idParagraph = $idParagraph;
            $this->state = $this->getParagraph();
        }
    }

    public function getParagraph()
    {
        $postController = new PostController();
        $postControllerReturn = $postController->findParagraph($this->idParagraph);

        if($postControllerReturn['status'] === 'success') {
            return $postControllerReturn['data'];
        }
    }

    public function save()
    {
        if($this->idParagraph) {
            PostParagraphs::query()->findOrFail($this->idParagraph)->update($this->state);
        }else {
            $this->state['post_id'] = $this->idPost;
            $this->state['order'] = (PostParagraphs::query()->where('post_id',$this->idPost)->count() + 1);
            PostParagraphs::query()->create($this->state);
        }
            return redirect()->route('post.paragraph', ['id' => $this->idPost]);

    }

    public function render()
    {
        return view('livewire.paragraph.edit');
    }
}
