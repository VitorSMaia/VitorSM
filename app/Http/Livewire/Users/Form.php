<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Traits\ModalCenter;
use Livewire\Component;
use StdClass;

class Form extends Component
{
    use ModalCenter;
    public $idUser;
    public $state;

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

    public function save()
    {
        if($this->idUser) {
            User::find($this->idUser)->update($this->state);
        }else {
            User::create($this->state);
        }
        $this->closeModal();
        $this->emit('refreshTableUser');
    }

    public function render()
    {
        return view('livewire.users.form');
    }
}
