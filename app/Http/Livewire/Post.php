<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostParagraphs;
use StdClass;


class Post extends Component
{
    public $postID;

    public function mount($postID = null) {
        if($postID) {
            $this->postID = $postID;
        }else {
            return 404;
        }

    }

    public function getParagraphs() {
        $postPragraphsDB = new PostParagraphs;
        $postPragraphsDB = $postPragraphsDB->query()->where('post_id', $this->postID)->orderBy('order', 'ASC')->get();

        return $postPragraphsDB;
    }

    public function render()
    {
        $response = new StdClass;
        $response->paragraphs = $this->getParagraphs();

        return view('livewire.post', ['response' => $response]);
    }
}
