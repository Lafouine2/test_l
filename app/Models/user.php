<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
 protected $table ="user";
 protected $primaryKey ="id_user";
 public $timestamps = false;
 protected $fillable = ["nom","prenom","niveau"];
}
