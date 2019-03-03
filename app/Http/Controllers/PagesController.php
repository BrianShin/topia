<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            $tasks = [
                'go to work',
                'go to school',
                'go to the park'
            ];
        
            return view('welcome', [
                'tasks' => $tasks
            ]);
    }

    public function topia(){
        return view('topia');
    }

    public function writing(){
        return view('writing');
    }
}
