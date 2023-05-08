<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ModalInfo extends Component
{
    public $show = false;
    public $params = [];

    protected $listeners = [
        'openInfo', 'close'
    ];

    public function openInfo($params = [])
    {
        $this->params = $params;
        $this->show = true;
    }

    public function close() {
        $this->show = false;
        $this->params = [];
    }

    public function render()
    {
        return view('livewire.components.modal-info');
    }
}
