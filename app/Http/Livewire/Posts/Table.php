<?php

namespace App\Http\Livewire\Posts;

use App\Models\User;
use App\Models\Post;
use App\Traits\ModalCenter;
use Livewire\Component;

class Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Título' => 'title',
        ]
    ];

    protected $listeners = ['refreshTablePost' => '$refresh'];

    public function getPosts()
    {
        $postDB = Post::query();

        if(!empty($this->state['search'])) {
            $postDB->where('title', 'LIKE', "%{$this->state['search']}%");
        }

        $postDB = $postDB->get();
        $this->state['posts'] = $postDB;
    }

    public function updatedStateSearch()
    {
        $this->getPosts();
    }

    public function deletePost($id)
    {
        $postDB = Post::query()->findOrFail($id)->delete();
        if($postDB) {
            $this->emit('refreshTablePost');
        }
    }

    public function render()
    {
        $this->getPosts();

        return view('livewire.posts.table');
    }
}
