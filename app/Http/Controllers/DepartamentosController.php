<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartamentosRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $test = Departamento::all();
       // dd($test);
        echo 'departamentos!!';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('departamentos');
       // echo 'create un depto vieja!!';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->input('DPTODenominacion'));
          $departamento = Departamento::create([
          'DPTO_Denominacion'=> $request->input('DPTODenominacion'),
          'DPTO_Sigla'=> $request->input('DPTOSigla')]);
          return redirect('/departamentos') ;
          //dd('ok');

        //    $departamento = New Departamento;
        //    $departamento->DPTO_Denominacion = $request->input('DPTODenominacion');
        //    $departamento->DPTO_Sigla = $request->input('DPTOSigla');
        //    $departamento->save();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $departamento = Departamento::All()->where('Id',$id);
       // dd ($departamento);
       return json_encode($departamento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departamento = Departamento::All()->where('Id',$id);
        echo 'editame esteeeee!!';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo 'departamento actualizado!!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $departamento = Departamento::All()->where('Id',$id);
        echo 'departamento elminado!!';
    }
}
