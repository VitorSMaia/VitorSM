<?php

namespace App\Http\Livewire\Paragraph;

use App\Models\PostParagraphs;
use Livewire\Component;

class Edit extends Component
{
    public $idParagraph;
    public $idPost;
    public $state = [
        'content' => ''
    ];

    public function mount($idPost = null, $id = null)
    {
        if($id) {
            $this->idParagraph = $id;
            $this->state = $this->getParagraph();
        }
        if($idPost) {
            $this->idPost = $idPost;
        }
    }

    public function getParagraph()
    {
        return PostParagraphs::query()->findOrFail($this->idParagraph)->toArray();
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
            return redirect()->route('paragraph');

    }

    public function render()
    {
        return view('livewire.paragraph.edit');
    }
}
