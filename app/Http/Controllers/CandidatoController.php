<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller{

	public function list(){
        $candidatos=Candidato::all();
        return view('candidatos',['candidatos'=>$candidatos]);
	}
	public function store(Request $request){
		$candidato = new Candidato();
        $candidato->nombre=$request->nombre;
        $candidato->partido=$request->partido;
        $candidato->save();
	}
	public function delete(){
		//your code here
	}
}
