<?php

namespace App\Http\Livewire\Xp;

use App\Http\Controllers\XpController;
use App\Traits\ModalCenter;
use Livewire\Component;

class   Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Company' => 'company',
//            'Imagem' => 'image',
            'Office' => 'office',
            'Description' => 'description',
            'Date Start' => 'dt_start',
            'Date End' => 'dt_end',
        ]
    ];

    protected $listeners = ['refreshTableXp' => '$refresh'];

    public function getXp()
    {
        $postFormController = new XpController();
        $postFormControllerReturn = $postFormController->index($this->state['search']);

        if($postFormControllerReturn['status'] == 'success') {
            $this->state['xps'] = $postFormControllerReturn['data'];
        }
    }

    public function updatedStateSearch()
    {
        $this->getXp();
    }

    public function deleteXp($id)
    {
        $postFormController = new XpController();
        $postFormControllerReturn = $postFormController->delete($id);

        if($postFormControllerReturn['status'] == 'success') {
            $this->emit('refreshTableXp');
        }
    }

    public function render()
    {
        $this->getXp();
        return view('livewire.xp.table');
    }
}
