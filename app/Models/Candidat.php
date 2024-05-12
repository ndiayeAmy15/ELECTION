<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'partie',
        'biographie',
        'photo',
      
    ];
 
    public function programmes()
    {
        return $this->hasMany(Programme::class, 'candidat_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }
    
}
