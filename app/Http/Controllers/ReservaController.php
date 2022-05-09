<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Entrante;
use App\Models\Postre;
use App\Models\Primerplato;
use App\Models\Reserva;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ReservaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('reserva')->with(['a'=>""]);
    }

    public function reserva(Request $request){

            $tur=$request->get('turno');
            $per=$request->get('personas');

            if ($tur == 'Comida'){
                
                if ($per <=2){
                    //echo" 2 personas!";
                    
                    $id = DB::table('reserva_mesa')->where('turno', 'Comida')->where('reservat', 'FALSE')->where('tipo_mesa', 2)->get('id')->first();
                    $res = DB::table('reserva_mesa')->where('turno', 'Comida')->where('reservat', 'FALSE')->where('tipo_mesa', 2)->get('reservat')->first();
                    $usu = DB::table('reserva_mesa')->where('turno', 'Comida')->where('reservat', 'FALSE')->where('tipo_mesa', 2)->get('usuario')->first();
                    
                    var_dump($id);
                    var_dump($usu);
                    var_dump($res);


                    //var_dump($taules);
                    /*
                    foreach ($taules as $taula) {
                        var_dump($taula);
                    }
                    */
                    /*
                    foreach($taules as &$taula) {
                        $id       = $taula['id'];
                        $turno    = $taula['turno'];
                        $reservat  = $taula['reservat'];
                    }
                    echo $id;
                    echo $turno;
                    echo $reservat;
                    */
                    /*
                    foreach ($taules as $taula) 
                        //var_dump($taula);
                        //
                        echo $taula;
                        echo "<br>";
                        //$array[] = $taula->turno;
                    */
                    //echo $array;

                }
                elseif($per >2 && $per <=4 ){
                    echo" 4 personas!";
                }
                elseif($per >4 && $per <=8){
                    echo" 8 personas!";

                }
                /*
                $taules = DB::table('reserva_mesa')->where('turno', 'Comida')->where('reservat', 'FALSE')->get('*');

                foreach ($taules as $taula) {
                    echo $taula->id;
                }
                */
                //$taula = Reserva::all();

                //var_dump($taules);
            }

            elseif($tur == 'Cena'){
                //echo" 2 personas!";
                    
                $taules = DB::table('reserva_mesa')->where('turno', 'Cena')->where('reservat', 'FALSE')->get('*')->first();


                //var_dump($taules);
                /*
                foreach ($taules as $taula) {
                    var_dump($taula);
                }
                */
                /*
                foreach($taules as &$taula) {
                    $id       = $taula['id'];
                    $turno    = $taula['turno'];
                    $reservat  = $taula['reservat'];
                }
                echo $id;
                echo $turno;
                echo $reservat;
                */

                foreach ($taules as $taula) 
                    //var_dump($taula);
                    //
                    echo $taula;
                    echo "<br>";
                    //$array[] = $taula->turno;

                //echo $array;

            }
            elseif($per >2 && $per <=4 ){
                echo" 4 personas!";
            }
            elseif($per >4 && $per <=8){
                echo" 8 personas!";

            }
            /*
            $taules = DB::table('reserva_mesa')->where('turno', 'Comida')->where('reservat', 'FALSE')->get('*');

            foreach ($taules as $taula) {
                echo $taula->id;
            }
            */
            //$taula = Reserva::all();

            //var_dump($taules);

            }
            
            //return view('menu');   
           
    }


