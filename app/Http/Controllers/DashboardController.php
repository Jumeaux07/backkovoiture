<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __construct()
    {
        View::share([
            'menu' => 'Tableau de bord',
            'title' => 'Tableau de bord',
        ]);
    }

    public function index(){

        //Recuperation des dates
        $aujourdhui = Carbon::today();
        $dateDebutMois = Carbon::now()->startOfMonth();
        $dateFinMois = Carbon::now()->endOfMonth();
        $dateDebutSemaine = Carbon::now()->startOfWeek();
        $dateFinSemaine = Carbon::now()->endOfWeek();

        ############################################################ UTILISATEURS ###################################################
        $data['module'] = 'Statistique';
        //utilisateurs inscrits aujourd'hui
        $data['utilisateurstoday'] = User::where('role_id',2)->whereDate('created_at',$aujourdhui)->get();
        //utilisateurs inscrits cette semaine
        $data['utilisateursweek'] = User::where('role_id',2)->whereBetween('created_at',[$dateDebutSemaine,$dateFinSemaine])->get();
        //utilisateurs inscrits ce mois'
        $data['utilisateursmonth'] = User::where('role_id',2)->whereBetween('created_at',[$dateDebutMois,$dateFinMois])->get();
        //Total inscrits
        $data['utilisateurs'] = User::where('role_id',2)->get();



        ############################################################ DEMANDES ###################################################
        $data['module'] = 'Statistique';
        //demandes aujourd'hui
        $data['demandestodays'] = Demande::whereDate('created_at',$aujourdhui)->get();
        //demandes cette semaine
        $data['demandesweek'] = Demande::whereBetween('created_at',[$dateDebutSemaine,$dateFinSemaine])->get();
        //demandes inscrits ce mois'
        $data['demandesmonth'] = Demande::whereBetween('created_at',[$dateDebutMois,$dateFinMois])->get();
        //Total demandes
        $data['demandes'] = Demande::all();



        return view('dashboard',$data);

    }
}
