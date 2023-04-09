<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ModalCenter extends Component
{
    public $show = false;
    public $component = null;
    public $params = [];

    protected $listeners = [
        'open', 'close'
    ];

    public function open($component = null, $params = [])
    {
        $this->component = $component;
        $this->params = $params;
        $this->show = true;
    }

    public function close() {
        $this->show = false;
        $this->component = null;
        $this->params = [];
    }

    public function render()
    {
        return view('livewire.components.modal-center');
    }
}
