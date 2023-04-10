<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use StdClass;

class Posts extends Component
{
    public function getPost() {
        $postDB = new Post;
        $postDB = $postDB->query()->limit(4)->get();

        return $postDB;
    }
    public function render()
    {
        $response = new StdClass;
        $response->post = $this->getPost();

        return view('livewire.posts', ['response' => $response]);
    }
}
