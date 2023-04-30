<?php

namespace App\Http\Livewire;

use App\Http\Controllers\XpController;
use App\Models\Post;
use Livewire\Component;
use StdClass;

class Index extends Component
{
    public function getPost() {
        $postDB = new Post;
        $postDB = $postDB->query()->with('paragraph')->limit(4)->get();

        return $postDB;
    }

    public function getXp() {
        $xpController = new XpController();
        $xpControllerReturn = $xpController->list();

        if($xpControllerReturn['status'] === 'sucess') {
            return $xpControllerReturn['data'];
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
