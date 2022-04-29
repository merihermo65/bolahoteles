<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

use App\Http\Controllers\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=\Auth::user();
        $users = User::wherenot('id',$user->id)->paginate(10);
        
        return view('edit-role',compact('users'))->with('users', $users);
    }


    public function getavatar($id)
    {
        $users= User::all();

        foreach($users as $user){
            if($id==$user->id){
                $filename=$user->image;
                $nom=$user->name;
            }
        };
        
        $file=Storage::disk('users')->get($filename);
        return new Response($file,200);
    }

    /*estoy trabajando en esto */

    public function indexupdate(Request $request)
    {
        return view('edita-role')->with(['a'=>""]);
    }
    
    public function update(Request $request)
{
    $user=\Auth::user();
    $id =\Auth::user()->id;
    
    
    
    $role=$request->input('role');

    $validate=$this->validate($request,[
        'role'=>['required','string','max:255'],
    ]);


    $user->role=$role;

    $user->update();
    return view('edita-role')->with(['a'=>"S'ha editat correctament"]);

}
}
