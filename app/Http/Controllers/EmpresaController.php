<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Muestra todas las empresas en la base de datos
        $empresas= Empresa::all();

        return view('empresas.index')->with('empresas',$empresas);

        // return view('empresas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se consulta las categorias de empresas para pasarlas a la vista
        $tipo_empresa =DB::table('tipo_empresa')->get()->pluck('tipo');


        return view('empresas.create')->with('tipo_empresa',$tipo_empresa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Valida el nombre y el tipo de empresa
        $data = request()->validate([
            'nombre' =>'required|min:6',
            'tipo_empresa'=>'required'
        ]);

        //Valida la cantidad de trabjadores
        if(request()->all()['cantidad_trabajadores'] === null){
            $numTrabajadores = 0;
        }else{
            $numTrabajadores= request()->all()['cantidad_trabajadores'];
        }
        //Valida la cantidad de trabjadores
        if(request()->all()['cantidad_trabajadores'] === null){
            $numTrabajadores = 0;
        }else{
            $numTrabajadores= request()->all()['cantidad_trabajadores'];
        }
        $empresa = new Empresa();

        $empresa->nombre = $data['nombre'];
        $empresa->tipo_empresa = $data['tipo_empresa'];
        $empresa->cantidad_trabajadores = $numTrabajadores;

        $empresa->save();

        //Guardo en la base de datos
        // DB::table('empresas')->insert([
        //     "nombre"=>$data['nombre'],
        //     "cantidad_trabajadores"=>$numTrabajadores,
        //     "tipo_empresa"=>$data['tipo_empresa'],
        //     'created_at' =>date('Y-m-d H:i:s'),
        //     'updated_at' =>date('Y-m-d H:i:s')

        // ]);

        return redirect()->action('EmpresaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
        $tipo_empresa =DB::table('tipo_empresa')->get()->pluck('tipo');
        return view('empresas.edit')->with('tipos_empresa',$tipo_empresa)->with('empresa',$empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //Validando
        $data = request()->validate([
            'nombre' =>'required|min:6',
            'tipo_empresa'=>'required'
        ]);

        //Valida la cantidad de trabjadores
        if(request()->all()['cantidad_trabajadores'] === null){
            $numTrabajadores = 0;
        }else{
            $numTrabajadores= request()->all()['cantidad_trabajadores'];
        }

        $empresa->nombre = $data['nombre'];
        $empresa->tipo_empresa = $data['tipo_empresa'];
        $empresa->cantidad_trabajadores = $numTrabajadores;

        $empresa->save();

        //Redireccionar al index
        return redirect()->action('EmpresaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //Eliminar Empresa
        $empresa->delete();

        return redirect()->action('EmpresaController@index');
    }
}
