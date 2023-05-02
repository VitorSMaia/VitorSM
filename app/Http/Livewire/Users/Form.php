<?php

namespace App\Http\Livewire\Users;

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Traits\ModalCenter;
use Livewire\Component;
use StdClass;

class Form extends Component
{
    use ModalCenter;
    public $idUser;
    public $state;


    protected $rules = [
        'state.name' => 'required',
        'state.email' => 'required',
        'state.password' => 'required|min:2',
    ];

    public function mount($id = null) {
        if($id) {
            $this->idUser = $id;
            $this->state = $this->getUser();
        }
    }


    public function getUser()
    {
        return User::findOrFail($this->idUser)->toArray();
    }

    public function updateOrCreate()
    {
        $validatedData = $this->validate()['state'];

        $userController = new UserController();
        $userControllerReturn = $userController->updateOrCreate($validatedData);

        if($userControllerReturn['status'] === 'success') {
            $this->closeModal();
            $this->emit('refreshTableUser');
        }
    }

    public function render()
    {
        return view('livewire.users.form');
    }
}
