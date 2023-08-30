<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $menu = "Utilisateurs";

    public function render()
    {
        $data['section'] = "Cette section est reservé à l'affichage de la liste des clients";
        $data['users'] = User::where(['role_id' => 2, 'statut' => 1])->get();
        return view('livewire.user-component')->with($data);
    }
}
