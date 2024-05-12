<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomSect',
        'programmeSect',
        'programme_id'
    ];
    public function Programme()
    {
        return $this->belongsTo(Programme::class, 'programme_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }
   
}
