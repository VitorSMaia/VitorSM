<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Traits\ModalCenter;
use Livewire\Component;
use StdClass;


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
        $userDB = User::query();

        if(!empty($this->state['search'])) {
            $userDB->where('name', 'LIKE', "%{$this->state['search']}%");
        }

        $userDB = $userDB->get();
        $this->state['users'] = $userDB;
    }

    public function updatedStateSearch()
    {
        $this->getUsers();
    }

    public function deleteUser($id)
    {
        $userDB = User::query()->findOrFail($id)->delete();
        if($userDB) {
            $this->emit('refreshTableUser');
        }
    }

    public function render()
    {
        $this->getUsers();

        return view('livewire.users.table');
    }
}
