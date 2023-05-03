<?php

namespace App\Http\Livewire\Xp;

use App\Http\Controllers\XpController;
use App\Traits\ModalCenter;
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
        $xpController = new XpController();
        $xpControllerReturn = $xpController->find($this->idXp);

        if($xpControllerReturn['status'] == 'success') {
            return $xpControllerReturn['data'];
        }
    }

    public function updateOrCreate() {
        $request = $this->state;

        $xpController = new XpController();
        $xpControllerReturn = $xpController->updateOrCreate($this->idXp, $request);

        if($xpControllerReturn['status'] === 'success') {
            $this->closeModal();
            $this->emit('refreshTableXp');
        }
    }

    public function render() {
        return view('livewire.xp.form');
    }
}
