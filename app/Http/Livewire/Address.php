<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Address extends Component
{

    public $uf, $city;

    public function mount()
    {
        $this->uf = $this->getUfs()[0]->id;
    }

    public function getUfs()
    {
        $data = \file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/estados');

        $ufs = json_decode($data);

        return $ufs;
    }

    public function getCities()
    {

        $data = \file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' . $this->uf . '/municipios');

        $cities = json_decode($data);

        return $cities;
    }

    public function render()
    {
        return view('livewire.address');
    }
}
