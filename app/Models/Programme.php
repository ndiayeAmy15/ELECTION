<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenue',
        'candidat_id'
    ];
    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'candidat_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }

    public function secteurs()
    {
        return $this->hasMany(Secteur::class, 'programme_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
  
}
