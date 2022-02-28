<?php

namespace App\Http\Controllers;

use App\Models\talento_global;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TalentoController extends Controller
{
    public function form(){
        return view('talento.form_talentos');
    }

    public function index()
    {
        $talentos = talento_global::all();
        return view('talento.index', compact('talentos'));
    }

    public function ver($id){
        $talento = talento_global::find($id);

        return view('talento.ver', ['talento' => $talento]);
    }

    public function store(Request $request){
        try {
            
            DB::beginTransaction();
            talento_global::store($request);
            DB::commit();
            return redirect()->to('/')->with('message', 'Formulario almacenado exitosamente');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/')->with('error', $e->getMessage());
        }
    }
}
