<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Electeur;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Database\MySqlConnection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function list_electeur()
    {
        $electeur = User::all();
        return view('electeur_view/list_electeur',['electeurs' => $electeur]);
    }
    public function acceuil()
    {
        Auth::logout();
        return view('baseUser');
    }
}
