<?php

namespace App\Http\Livewire;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\XpController;
use App\Mail\SendContact;
use App\Models\Post;
use App\Traits\ModalCenter;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use StdClass;

class Index extends Component
{
    use ModalCenter;

    public $state = [];

    public function getPost() {
        $postController = new PostController();
        $postControllerReturn = $postController->list();

        if($postControllerReturn['status'] === 'sucess') {
            return $postControllerReturn['data'];
        }
    }

    public function getXp() {
        $xpController = new XpController();
        $xpControllerReturn = $xpController->list();

        if($xpControllerReturn['status'] === 'sucess') {
            return $xpControllerReturn['data'];
        }
    }

    public function sendContact()
    {
        $request = $this->state;
        $indexController = new IndexController();

        $indexControllerReturn = $indexController->sendContact($request);

        if($indexControllerReturn['status'] === 'success') {
            $this->openModalInfo();
            $this->reset();
        }

    }


    public function render()
    {
        $response = new StdClass;
        $response->post = $this->getPost();
        $response->xp = $this->getXp();

        return view('livewire.index', ['response' => $response]);
    }
}
