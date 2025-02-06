<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller
{
    function use(){
        $name = 'Srishty';
        return view('home',['name' => $name]);
    }
    function AddUsers( Request $request){
        $request->validate([
            'username'=>'required | min:3 | max:30',
            'mail'=>'required | email',
            'age'=>'required',
        ]);

        echo $request->username;
        echo '<br>';
        echo $request->mail;
        echo '<br>';
        echo $request->age;
        echo '<br>';
        echo $request->department;

    }
}
