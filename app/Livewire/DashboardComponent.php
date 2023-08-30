<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardComponent extends Component
{
    public $menu = "Tableau de bord";
    public $titre = "Dashboard";

    public function render()
    {
        return view('livewire.dashboard-component');
    }
}
