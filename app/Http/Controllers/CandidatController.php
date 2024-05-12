<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;


class CandidatController extends Controller
{

    protected $request;
    function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function listCandidat(){
        return view('candidat_view/listCandidat',['candidats'=>Candidat::all()]);
    }
    public function viewaddCandidat (){
       return view('candidat_view.addCandidat');
        }
      public function addCandidat(Request $request){
           $request->validate([
              'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
           ]);
           $Candidat = new Candidat();
           $Candidat->nom = $request->nom;
           $Candidat->prenom = $request->prenom;
           $Candidat->partie = $request->partie;
           $Candidat->biographie =  $request->biographie;
           $fileName = time() . '.' . $request->photo->extension();
           $request->photo->storeAs('public/images', $fileName);
            if( $request->hasfile('photo')){
                $file =  $request->input('photo');
                $extension = $file->getClientOriginalExtension();
                $filename=time(). '.'.$extension;
                $file->move('public/images/',$filename);
                $Candidat->image=$filename;
            }else{
                return $request;
                $candidat->image = '';
            }
           $candidat->save();
           return redirect()->route('app_list_Candidat');

   }

   public function addingCandidat(Request $request){
      $request->validate(
          [
              'nom' => 'required',
              'prenom' => 'required',
              'partie' => 'required',
              'biographie' => 'required',
              'photo' => 'required',
              'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

          ]);
      $cand = new Candidat();
      $cand->nom = $request->nom;
      $cand->prenom = $request->prenom;
      $cand->partie = $request->partie;
      $cand->biographie = $request->biographie;

      $fileName = time() . '.' . $request->photo->extension();
      $request->photo->storeAs('public/images', $fileName);
    //   $cand->biographie = $request->biographie;
      $cand->photo = $fileName;
      $cand->save();
      return redirect()->route('app_list_Candidat');


   }
   public function updateCandidat(int $id,Request $request){
    if($this->request->isMethod('post')){
       $cand = Candidat::FindOrfail($request->id);
       $cand->nom = $request->nom;
       $cand->prenom = $request->prenom;
       $cand->partie = $request->partie;
       $cand->biographie = $request->biographie;
       $fileName = time() . '.' . $request->photo->extension();
       $request->photo->storeAs('public/images', $fileName);
       $cand->photo = $fileName;
        $cand->update();
        return redirect()->route('app_list_Candidat');
   }else{
       return view('candidat_view.updateCandidat',['cand' => Candidat::findOrfail($id)]);
   }
}

   public function delateCandidat(int $id,Request $request){
        $cand = Candidat::FindOrfail($id);
        $cand->delete();
        return redirect()->route('app_list_Candidat');
   }

   public function detailCandidat(int $id){
        $candidat = Candidat::with('programmes')->find($id);

        return view('candidat_view.detailCandidat',['candidat' => $candidat]);
   }

   public function detailCand(int $id){
    $candidat = Candidat::with('programmes')->find($id);

    return view('candidat_view.detailCand',['candidat' => $candidat]);
}


public function listCand(){
    return view('candidat_view/listCand',['candidats'=>Candidat::all()]);
}


}

