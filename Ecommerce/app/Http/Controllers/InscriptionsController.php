<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class InscriptionsController extends Controller
{
    //

    public function inscription(){
        return view('inscription');
    }

    public function inscriptions(){
        request()->validate([

            'email' =>['required','email'],
            'name' => ['required'],
            'surname'=>['required'],
            'password' => ['required','confirmed'],
            'password' => ['required'],
            'birthday' =>['required'],

        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            'surname' => request('surname'),
            'birthday' => request('birthday'),
        ]);
    }
}
