<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Elector;

class ElectorController extends Controller{

	public function list(){
        $electores=Elector::all();
        return view('electores',['electores'=>$electores]);
	}
	public function store(Request $request){
		$elector = new Elector();
        $elector->voto_id=$request->voto_id;
        $elector->cabina_id=$request->cabina_id;
        $elector->candidato_id=$request->candidato_id;
        $elector->nombre=$request->nombre;
        $elector->dni=$request->dni;
        $elector->correo=$request->correo;
        $elector->password=bcrypt($request->password);
        $elector->save();
	}
	public function delete(){
		//your code here
	}
}
