<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use StdClass;

class Index extends Component
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

        return view('livewire.index', ['response' => $response]);
    }
}
