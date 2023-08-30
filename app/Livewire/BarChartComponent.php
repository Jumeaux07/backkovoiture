<?php

namespace App\Livewire;

use Livewire\Component;

class BarChartComponent extends Component
{

    public $titre;

    public function render()
    {
        return view('livewire.bar-chart-component');
    }
}
