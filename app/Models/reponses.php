<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reponses extends Model
{
     protected $table ="reponses";
     protected $primaryKey = "id_reponse";
     protected $fillable =["contenu","id_user","nom_question"];
     public $timestamps = false;
}
