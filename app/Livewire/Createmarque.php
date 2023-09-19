<?php

namespace App\Livewire;

use App\Models\Marque;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Marquelist;
use DragonCode\Support\Facades\Helpers\Str;

use function PHPSTORM_META\type;

class Createmarque extends Component
{
    public $libelle = '';
    public $isSave = true;
    public $idMarque = 0;


    public function storeMarque(){

        $this->validate([
            'libelle' => 'required|min:3'
        ]);

        Marque::create([
            'libelle' => $this->libelle
        ]);

        $this->libelle = '';
        $data['type'] = 'alert-success';
        $data['message'] = 'Marque ajoutée avec succès';
        $this->dispatch('marqueAddEvent', data: $data);

    }


    public function updateMarque(){

        $this->validate([
            'libelle' => 'required|min:3'
        ]);

        $marque = Marque::find($this->idMarque);
        $marque->update([
            'libelle' => $this->libelle
        ]);

        $this->libelle = '';
        $this->isSave = true;
        $data['type'] = 'alert-success';
        $data['message'] = 'Marque modifiée avec succès';
        $this->dispatch('marqueAddEvent', data: $data);
    }



    #[On('editMarque')]
    public function render($marque=null)
    {

        if($marque != null ){
            $this->libelle = $marque['libelle'];
            $this->isSave = false;
            $this->idMarque = $marque['id'];

        }
        return view('livewire.createmarque');
    }
}
