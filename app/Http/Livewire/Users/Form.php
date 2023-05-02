<?php

namespace App\Http\Livewire\Users;

use App\Http\Controllers\UserController;
use App\Traits\ModalCenter;
use Livewire\Component;

class Form extends Component
{
    use ModalCenter;
    public $idUser;
    public $state = [];

    public function mount($id = null) {
        if($id) {
            $this->idUser = $id;
            $this->state = $this->getUser();
        }
    }
    public function getUser() {
        $userController = new UserController();
        $userControllerReturn = $userController->find($this->idUser);

        if($userControllerReturn['status'] === 'success') {
            return $userControllerReturn['data'];
        }
    }
    public function updateOrCreate() {
        $request = $this->state;

        $userController = new UserController();
        $userControllerReturn = $userController->updateOrCreate($this->idUser, $request);

        if($userControllerReturn['status'] === 'success') {
            $this->closeModal();
            $this->emit('refreshTableUser');
        }
    }
    public function render() {
        return view('livewire.users.form');
    }
}
