<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Monitor = Monitor::all();
        return view('monitores/index')->with('Monitor', $Monitor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monitores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monitor = new Monitor($request->all());
        $monitor->save();

        flash('Monitor agregado satisfactoriamente')->success();

        return redirect()->route('monitores.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monitor = Monitor::where('IdMonitor', $id)->get()->first();
        //dd($monitor);
        return view('monitores/edit')->with('Monitor', $monitor);
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
        $monitor = Monitor::where('IdMonitor', $id)->get()->first();
        $monitor->nombres               = $request->nombres;
        $monitor->apellidos             = $request->apellidos;
        $monitor->programa_academico    = $request->programa_academico;
        $monitor->semestre              = $request->semestre;
        $monitor->cedula                = $request->cedula;
        $monitor->email                 = $request->email;
        $monitor->telefono              = $request->telefono;
        $monitor->celular               = $request->celular;

        $monitor->save();

        flash('Monitor '.$monitor->nombres.' actualizado satisfactoriamente')->success();

        return redirect()->route('monitores.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $monitor = Monitor::where('IdMonitor', $id);
     
        $monitor->delete();

        flash('Usuario eliminado satisfactoriamente')->success();

        return redirect()->route('monitores.index');
    }
}
