<?php

namespace App\Http\Livewire\Access;

use App\Http\Controllers\AccessController;
use Livewire\Component;

class Table extends Component
{
    public $state = [
        'head' => [
            'IP' => 'ip',
            'Country' => 'countryName',
            'Region ' => 'regionName',
            'City' => 'cityName',
            'Latitude' => 'latitude',
            'Longitude' => 'longitude',
            'Created At' => 'created_at',
        ]
    ];
    public function getAccess()
    {
        $accessController = new AccessController();
        $accessControllerReturn = $accessController->index();

        if($accessControllerReturn['status'] === 'success') {
            $this->state['access'] = $accessControllerReturn['data'];
        }
    }
    public function render()
    {
        $this->getAccess();
        return view('livewire.access.table');
    }
}
