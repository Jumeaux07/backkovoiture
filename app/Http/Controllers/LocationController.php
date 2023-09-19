<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LocationController extends Controller
{

    public function __construct()
    {
        View::share([
            'menu' => "Location",
            'title' => "Location",
        ]);
    }
    public function index(){

        $data['section'] = "Cette section est reservé à l'affichage de toutes les locations effectuées";

    }

    ################################################# VOITURE ############################################################

    public function voitureListe(){

        $data['section'] = "Cette section est reservé à l'affichage de toutes les voitures";
        $data['module'] = "Voiture";

        return view('location.voiture.index',$data);

    }


    public function createVoiture(){

        $data['section'] = "Cette section est reservée à la création d'une voiture";
        $data['module'] = "Voiture";

        return view('location.voiture.create',$data);

    }



    ################################################# MARQUE ############################################################

    public function marqueListe(){

        $data['section'] = "Cette section est reservée à la liste des marques des voitures";
        $data['module'] = "Marque";

        return view('location.marque.index',$data);
    }


    public function createMarque(){

        $data['section'] = "Cette section est reservée à la création des marques des voitures";
        $data['module'] = "Marque";

        return view('location.marque.index',$data);

    }


    public function sotreMaqrue(Request $request){

        $this->validate($request,[
            'libelle' => 'required'
        ]);

        $marque = Marque::create([
            'libelle' => $request->libelle
        ]);

        if($marque){

            session()->flash('type', 'alert-success');
            session()->flash('message', 'Marque ajouté avec succès');
            return back();

        }else{

            session()->flash('type', 'alert-danger');
            session()->flash('message', 'Oups, une erreur s\'est produit lors de l\'enregistrement');
            return back();

        }

    }
}
