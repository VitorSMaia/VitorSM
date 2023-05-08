<?php

namespace App\Traits;

use Livewire\Component;

trait ModalCenter
{

    public function openModal($component = null, $params = [])
    {
        $this->emit('open', $component, $params);
    }

    public function closeModal()
    {
        $this->emit('close');
    }

    public function openModalInfo($params = [])
    {
        $this->emit('openInfo', $params);
    }
}
