<?php

namespace App\Http\Livewire\Projects;

use App\Http\Controllers\ProjectController;
use Livewire\Component;

class Form extends Component
{
    use ModalCenter;

    public $idXp;

    public $state = [];

    public function mount($id = null) {
        if($id) {
            $this->idXp = $id;
            $this->state = $this->getXp();
        }
    }

    public function getXp() {
        $ProjectController = new ProjectController();
        $ProjectControllerReturn = $ProjectController->find($this->idXp);

        if($ProjectControllerReturn['status'] == 'success') {
            return $ProjectControllerReturn['data'];
        }
    }

    public function updateOrCreate() {
        $request = $this->state;

        $ProjectController = new ProjectController();
        $ProjectControllerReturn = $ProjectController->updateOrCreate($this->idXp, $request);

        if($ProjectControllerReturn['status'] === 'success') {
            $this->closeModal();
            $this->emit('refreshTableProject');
        }
    }

    public function render()
    {
        return view('livewire.projects.form');
    }
}
