<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use App\Models\User;
use App\Models\Like;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\DB;
use App\Models\Programme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProgrammeController extends Controller
{
    //
    protected $request;
    function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function addProgramme(Request $request){
        if($this->request->isMethod('post')){
            $request->validate(
                [
                    'titre' => 'required',
                    'contenue' => 'required',
                    'candidat_id' => 'required'
                ]);
           $prog = new Programme();
            $prog->titre = $request->titre;
            $prog->contenue = $request->contenue;
            $prog->candidat_id = $request->candidat_id;

            
            $prog->save();
            return redirect()->route('app_list_programme');
        }else{
            return view('programe_view.addProgramme',['candidats' => Candidat::all()]);
        }
    }

    public function listProgramme(){
        return view('programe_view.listProgramme',['listProg' => Programme::all()]);
    }

    public function detailProgramme(int $id){
        $programme = Programme::with('secteurs')->find($id);
         return view('programe_view.detailProgramme',['Programme' => $programme]);
    }

    public function detailProg(int $id){
        $programme = Programme::with('secteurs')->find($id);
         return view('programe_view.detailProg',['prog' => $programme]);
    }
    
    public function likee($id){
        DB::beginTransaction();
        try {
            Like::findOrCreate(['user_id' => Auth::user()->id,'programme_id' => $id]);
            $programme = Programme::findOrFail($id);
            $programme->likes +=1;
            $programme->save();
            DB::commit(); 
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    public function dislike($id){
        DB::beginTransaction();
        try {
           $like =  Like::where(['user_id' => Auth::users()->id,'programme_id' => $id])->first();
            $like->delete();
            $programme = Programme::findOrFail($id);
            $programme->likes -=1;
            $programme->save();
            DB::commit(); 
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    public function likePost($programmeid){

        $like =  Like::where(['user_id' => Auth::user()->id,'programme_id' => $programmeid])->first();
       if(!$like){
        $like=new Like();
        $like->programme_id=$programmeid;
        $like->user_id=Auth::user()->id;
        $like->save();
        return redirect()->back();
       }else{
        return redirect()->back();
       }
           
          }
    public function dislikePost($programmeid){
       $like = Like::where(['user_id' => Auth::user()->id,'programme_id' => $programmeid])->first();
       $pro = Programme::with('likes')->find($programmeid);
       $like->delete();
       $like->save();
        return redirect()->back();
}

// public function graph($id){
//     return view('Admin_users.dashbord',['Candidat' => Candidat::with('programmes')->with('likes')->find($id)]);
// }
public function graph(){
   
    $candidats = Candidat::with('programmes.likes')->get();
    $chartData = [];
    foreach ($candidats as $candidat) {
        $likesCount = $candidat->programmes->flatMap(function ($programme) {
            return $programme->likes;
        })->count();
   
        $chartData[] = [
            'name' => $candidat->prenom,
            'likes_count' => $likesCount,
        ];
    }
    return response()->json($chartData);
    
    
    //  $candidat = Candidat::all();
    //  $voteCounts =[];
    //  foreach ($candidat as $cand) {
    //      $voteCounts[] = [
    //          'prenom' => $cand->prenom,
    //          'nom' => $cand->nom,
    //          'like' => $cand->partie,
    //      ];

    //  }
    // return response()->json(['likeData' => $voteCounts]);
//return view('Admin_users.dashbord',['likeData' => $voteCounts]);

   
}


public function graphB(){
    return view('Admin_users.graph');
}

   


    
}
