<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function store(Request $request){
        $nom = $request->name;
        $prenom = $request->surname;
        $niveau=$request->niveau;

        $user=user::create([
            "nom"=>$nom,
            "prenom"=>$prenom,
            "niveau"=>$niveau       ]);

            $id = $user->id_user;
            if($niveau == "CEP"){
                return redirect("/quizz1/".$id);
            }else if($niveau == "BEPC"){
                return redirect("/quizz4/".$id);
            }else {
                return redirect("/quizz7/".$id);
            }
    


    }
            
}