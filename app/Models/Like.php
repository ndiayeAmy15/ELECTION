<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    public function Programme()
    {
        return $this->belongsTo(Programme::class, 'programme_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); // Assurez-vous que 'id_candidat' est le nom correct de la clé étrangère
    }
}
