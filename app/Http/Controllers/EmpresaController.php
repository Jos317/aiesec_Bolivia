<?php

namespace App\Http\Controllers;

use App\Models\empresa_ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmpresaExport;

class EmpresaController extends Controller
{
    public function form(){
        return view('empresa.form_empresas');
    }

    public function index()
    {
        $empresas = empresa_ong::all();
        return view('empresa.index', compact('empresas'));
    }

    public function ver($id){
        $empresa = empresa_ong::find($id);

        return view('empresa.ver', ['empresa' => $empresa]);
    }

    public function store(Request $request){
        try {
            
            DB::beginTransaction();
            empresa_ong::store($request);
            DB::commit();
            return redirect()->to('/')->with('message', 'Formulario almacenado exitosamente');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function exportExcel() {
        return Excel::download(new EmpresaExport, 'empresa.xlsx');
    }
}
