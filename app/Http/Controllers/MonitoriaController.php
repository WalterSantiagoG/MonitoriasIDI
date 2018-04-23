<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoria;
use App\Monitor;
use App\Http\Requests\MonitoriaRequest;

class MonitoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Monitor = Monitor::all();
        return view('monitores/monitorias/create')->with('Monitor', $Monitor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonitoriaRequest $request)
    {
        $monitoria = new Monitoria($request->all());
        $monitoria->save();

        flash('Monitoria agregada satisfactoriamente')->success();

        return redirect()->route('monitores.index');
    }

    public function listarmonitorias (Request $request)
    {
        if ($request->ajax()) {

            $monitoria = Monitoria::where('IdMonitor', $request->id)->get();

            return $monitoria;
        }   
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
        //
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
    }
}
