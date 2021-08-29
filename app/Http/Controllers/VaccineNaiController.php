<?php

namespace App\Http\Controllers;

use App\Models\Nairobi;
use App\Models\VaccineNai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineNaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nairobis = Nairobi::all();
        return view('nairobi.index', compact('nairobis'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    
    public function show(Nairobi $nairobi)
    {
        return view('nairobi.show', compact('nairobi'));
    }

    
    public function edit(Nairobi $nairobi)
    {
        return view('nairobi.edit', compact('nairobi'));
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
        $name = $request->input('name');
        $lot_number = $request->input('lot_number');
        $status = $request->input('status');
        $vials = $request->input('vials');
        $temperature = $request->input('temperature');        
        $mfg_date = $request->input('mfg_date');
        $expiry_date = $request->input('expiry_date');        
        DB::update('update `vt_nairobi` SET `name`=?,`lot_number`=?,`status`=?,`vials`=?,`temperature`=?,`mfg_date`=?,`expiry_date`=? WHERE `id` = ?',[$name,$lot_number,$status,$vials,$temperature,$mfg_date,$expiry_date,$id]);

        return redirect()->route('nairobi.index')->with('message', 'Record Updated Successfully!');
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
