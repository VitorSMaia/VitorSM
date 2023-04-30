<?php

namespace App\Http\Livewire\Xp;

use App\Http\Controllers\XpController;
use App\Traits\ModalCenter;
use Livewire\Component;

class Form extends Component
{
    use ModalCenter;

    public $idXp;

    public $state = [
        'image' => ''
    ];

    protected $rules = [
        'state.company' => 'required',
        'state.url' => 'required',
        'state.office' => 'required|min:6',
        'state.description' => 'required',
        'state.image' => 'required',
        'state.dt_start' => 'required',
        'state.dt_end' => 'required',
    ];

    public function mount($id = null)
    {
        if($id) {
            $this->idXp = $id;
            $this->state = $this->getXp();
        }
    }

    public function getXp()
    {
        $xpController = new XpController();
        $xpControllerReturn = $xpController->find($this->idXp);

        if($xpControllerReturn['status'] == 'success') {
            return $xpControllerReturn['data'];
        }
    }

    public function updateOrCreate()
    {
        $validatedData = $this->validate()['state'];

        $xpController = new XpController();
        $xpControllerReturn = $xpController->updateOrCreate($this->idXp, $validatedData);

        if($xpControllerReturn['status'] == 'success') {
            $this->closeModal();
            $this->emit('refreshTableXp');
        }
    }

    public function render()
    {
        return view('livewire.xp.form');
    }
}
