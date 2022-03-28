<?php

namespace App\Http\Controllers;

use App\Models\talento_global;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TalentoExport;

class TalentoController extends Controller
{
    public function form()
    {
        $universidades = File::get(base_path() . '/public/lista_universidades.json');
        $universidades = json_decode($universidades)->universidad;
        return view('talento.form_talentos', compact('universidades'));
    }
    public function formv()
    {
        $universidades = File::get(base_path() . '/public/lista_universidades.json');
        $universidades = json_decode($universidades)->universidad;
        return view('talento.form_voluntariados', compact('universidades'));
    }
    public function index()
    {
        $talentos = talento_global::all();
        return view('talento.index', compact('talentos'));
    }

    public function ver($id)
    {
        $talento = talento_global::find($id);
        $universidades = File::get(base_path() . '/public/lista_universidades.json');
        $universidades = json_decode($universidades)->universidad;
        return view('talento.ver', compact('universidades'), ['talento' => $talento]);
    }

    public function store(Request $request)
    {
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

    public function exportExcel()
    {
        return Excel::download(new TalentoExport, 'talento.xlsx');
    }
}
