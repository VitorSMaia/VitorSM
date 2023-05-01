<?php

namespace App\Http\Livewire\Users;

use App\Http\Controllers\UserController;
use App\Traits\ModalCenter;
use Livewire\Component;


class Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Nome' => 'name',
            'Email' => 'email',
        ]
    ];

    protected $listeners = ['refreshTableUser' => '$refresh'];

    public function getUsers()
    {
        $userController = new UserController();

        $userControllerReturn = $userController->index($this->state['search']);

        if($userControllerReturn['status'] === 'success') {
            $this->state['users'] = $userControllerReturn['data'];
        }
    }

    public function updatedStateSearch()
    {
        $this->getUsers();
    }

    public function deleteUser($id)
    {
        $userController = new UserController();

        $userControllerReturn = $userController->delete($id);

        if($userControllerReturn['status'] === 'success') {
            $this->emit('refreshTableUser');
        }
    }

    public function render()
    {
        $this->getUsers();

        return view('livewire.users.table');
    }
}
