<?php

namespace App\Http\Controllers;

use App\Models\Entrante;
use App\Models\Postre;
use App\Models\Primerplato;
use Illuminate\Http\Response;


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

class CartaController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rol =\Auth::user()->role;
        
        if($rol == 'chef'){
            return view('plat');
        }
        else{
            return view('error');
        }
        
    }

    public function update(Request $request){
        
        $rol =\Auth::user()->role;
        
        if($rol == 'chef'){
            $name=$request->input('name');
            $desc=$request->input('description');
            $tipus=$request->get('plat');
            $image_path = $request->file('image');
            $preu = $request->input('preu');
        
            $validate=$this->validate($request,[
                'name'=>['required','string','max:255'],
                'description'=>['required','string','max:255'],
            ]);
    
    
            if($tipus == 'entrant'){
                $entrant = New Entrante();
    
                $entrant->name=$name;
                $entrant->description=$desc;
                $entrant->precio=$preu;
    
                if ($image_path){
                    $path=$image_path->store('entrantes');
                    $filename = preg_replace('/^.+[\\\\\\/]/', '', $path);
                    $entrant->image=$filename;
                }
        
                $entrant->save();
    
                return view('plat');
    
            }
            elseif($tipus == 'primer plat'){
                $primer = new Primerplato();
    
                $primer->name=$name;
                $primer->description=$desc;
                $primer->precio=$preu;
    
                if ($image_path){
                    $path=$image_path->store('primer');
                    $filename = preg_replace('/^.+[\\\\\\/]/', '', $path);
                    $primer->image=$filename;
                }
        
                $primer->save();
    
                return view('plat');
    
            }
            elseif($tipus == 'postre'){
                $postre = new Postre();
    
                $postre->name=$name;
                $postre->description=$desc;
                $postre->precio=$preu;
    
                if ($image_path){
                    $path=$image_path->store('postre');
                    $filename = preg_replace('/^.+[\\\\\\/]/', '', $path);
                    $postre->image=$filename;
                }
        
                $postre->save();
    
                return view('plat');
    
            }
        }
        else{
            return view('error');
        }


        
    }

    public function show()
    {
        $datE = Entrante::all();
        $datPP = Primerplato::all();
        $datP = Postre::all();
        return view('carta')->with('datE', $datE)->with('datPP', $datPP)->with('datP', $datP);
            
    }


    public function getimageE($filename)
    {
        $file=Storage::disk('entrantes')->get($filename);
        return new Response($file,200);
    }

    public function getimagePP($filename)
    {
        $file=Storage::disk('primer')->get($filename);
        return new Response($file,200);
    }

    public function getimageP($filename)
    {
        $file=Storage::disk('postre')->get($filename);
        return new Response($file,200);
    }
}
