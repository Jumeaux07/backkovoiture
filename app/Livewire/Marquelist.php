<?php

namespace App\Livewire;

use App\Models\Marque;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Marquelist extends Component
{
    use WithPagination;
    public $libelle = '';
    public $mot = '';

    public function edit($id){

        $marque = Marque::where('id',$id)->first();
        $this->dispatch('editMarque', marque: $marque);

    }


    public function deleteMarque($id){

        $marque = Marque::find($id);

        if($marque->delete()){

            $this->libelle = '';
            $data['type'] = 'alert-success';
            $data['message'] = 'Marque supprimée avec succès';
            $this->dispatch('marqueAddEvent', data: $data);

        }
    }

    #[On('marqueAddEvent')]
    public function render($data=null)
    {
        if($data != null ){
            session()->flash('type', $data['type']);
            session()->flash('message', $data['message']);
        }
        $data['marques'] = Marque::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.marquelist',$data)->with([
            "message",$data,
            'marques' => Marque::where('libelle', 'LIKE',"%{$this->mot}%")->paginate(5),
        ]);
    }
}
