<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TestController extends Controller
{

    public function dashboard(){
        return view ('dashboard');
    }
    public function home(){
        return view('homepage');
    }
    public function about(){
        return view ('aboutpage');
    }
    public function contact(){
        return view ('contactpage');
    }
    public function biography(){
        return view ('biography');
    }
    public function education(){
        return view ('education');
    }
    public function skills(){
        return view ('skill');
    }


    // public function index(){
    //     $todos = Todo::get();
    //     Todo::create([
    //         'name' => "dsadasasda",
    //     ]);

    //    $model = Todo::findorfail(1);
    //    // $model->name = "MAnalo";
    //    // $model->update();
    //     $model->delete();


    //     return view('claud',[
    //         'todos' => $todos,
    //     ]);
    // }
}
