<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use App\Traits\ModalCenter;
use Livewire\Component;

class Form extends Component
{
    use ModalCenter;
    public $idPost;
    public $state = [
        'image' => ''
    ];

    public function mount($id = null) {
        if($id) {
            $this->idPost = $id;
            $this->state = $this->getPost();
        }
    }

    public function getPost()
    {
        return Post::findOrFail($this->idPost)->toArray();
    }

    public function save()
    {
        if($this->idPost) {
            Post::find($this->idPost)->update($this->state);
        }else {
            Post::create($this->state);
        }

        $this->closeModal();
        $this->emit('refreshTablePost');
    }

    public function render()
    {
        return view('livewire.posts.form');
    }
}
