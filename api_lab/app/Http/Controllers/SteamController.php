<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Steamer;

class SteamController extends Controller
{
    public function steamers_list()
    {
        return Steamer::all();
    }

    public function signup(Request $req){
        $steamer = new Steamer();

        $steamer->Name = $req->Name;
        $steamer->Username = $req->Username;
        $steamer->Email = $req->Email;
        $steamer->Phone = $req->Phone;
        $steamer->Password = $req->Password;
        $steamer->save();

        return $steamer;
    }
   
}
