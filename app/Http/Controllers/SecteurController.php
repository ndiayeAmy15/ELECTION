<?php

namespace App\Http\Controllers;
use App\Models\Secteur;
use App\Models\Programme;


use Illuminate\Http\Request;

class SecteurController extends Controller
{
    //
    protected $request;
    function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function addSV(){
        return view('programe_view.addSecteur',['programmes' => Programme::all()]);
    }
    public function addSecteur(Request $request)
    {
        $request->validate(
            [
                'nomSect' => 'required',
                'programmeSect' => 'required',
                'programme_id' => 'required'
            ]);

            $sect = new Secteur();
            $sect->nomSect = $request->nomSect;
            $sect->programmeSect = $request->programmeSect;
            $sect->programme_id = $request->programme_id;
            $sect->save();
            return redirect()->route('app_list_secteur');
    }

    public function listSecteur(){
        return view('programe_view.listSecteur',['secteur' => Secteur::with('Programme')->get()]);
    }

}
