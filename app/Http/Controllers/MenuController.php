<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Entrante;
use App\Models\Postre;
use App\Models\Primerplato;


use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class MenuController extends Controller
{


    public function index()
    {
        $rol =\Auth::user()->role;
        
        if($rol == 'chef'){
            
            $datE = Entrante::all();
            $datPP = Primerplato::all();
            $datP = Postre::all();

            return view('crear_menu')->with('datE', $datE)->with('datPP', $datPP)->with('datP', $datP);    
        }
        
        else{
            return view('error');
        }
       
    }



    public function update(Request $request){

        $rol =\Auth::user()->role;
        
        if($rol == 'chef'){
            
            $menu = Menu::first();

            $ent=$request->get('ent');
            $prim=$request->get('prim');
            $postre=$request->get('postre');

            $menu->entrante=$ent;
            $menu->primer=$prim;
            $menu->postre=$postre;
            
            $menu->update();
            
            return view('menu');   
            
        }
        
        else{
            return view('error');
        }
           
    }

    public function show()
    {
        $data = Menu::all();

        return view('menu')->with('data', $data);
            
    }

}
