<?php

namespace App\Http\Livewire\Projects;

use App\Http\Controllers\ProjectController;
use App\Traits\ModalCenter;
use Livewire\Component;

class Table extends Component
{
    use ModalCenter;

    public $state = [
        'search' => '',
        'head' => [
            'Title' => 'title',
            'Description' => 'description',
            'Url' => 'url',
            'Frameworks or Language' => 'frameworks_or_languages',
        ]
    ];

    protected $listeners = ['refreshTableProject' => '$refresh'];

    public function getProject()
    {
        $projectController = new ProjectController();
        $projectControllerReturn = $projectController->index($this->state['search']);

        if($projectControllerReturn['status'] == 'success') {
            $this->state['projects'] = $projectControllerReturn['data'];
        }else {
            $this->state['projects'] = [];
        }
    }

    public function updatedStateSearch()
    {
        $this->getProject();
    }

    public function deleteProject($id)
    {
        $projectController = new ProjectController();
        $projectControllerReturn = $projectController->delete($id);

        if($projectControllerReturn['status'] == 'success') {
            $this->emit('refreshTableProject');
        }
    }

    public function render()
    {
        $this->getProject();
        return view('livewire.projects.table');
    }
}
