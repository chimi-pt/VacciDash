<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineController extends Controller
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
        //
        return view('vaccine.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here

                'product_name' => 'required'
            ]); 
                   
       
        /*$vaccine= new Vaccine();
            $vaccine->product_name= $request['product_name'];
            $vaccine->lot_number= $request['lot_number'];
            $vaccine->amount(vials)= $request['amount_vials'];
            $vaccine->expiry_date= $request['expiry_date'];
        $vaccine->save();*/

        $vaccine = Vaccine::create($request->all());            
        // return redirect()->route('vaccine.create');

        /*$notification = array(
            'message' => 'Vaccine added successfully', 
            'alert-type' => 'success'
            );
    
            return redirect()->route('vaccine.create')->with($notification);*/
            return redirect()->route('vaccine.create')->with('message', 'New Vaccine added!');
           
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
     * @param  int  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //   
        $vaccines = Vaccine::all();
        //if you want to get contacts on where condition use below code
        //$contacts = Contact::Where('tenant_id', "1")->get();
        return view('vaccine.edit', compact('vaccines'));
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
        $product_name = $request->input('product_name');
        $lot_number = $request->input('lot_number');
        $vials = $request->input('vials');
        $expiry_date = $request->input('expiry_date');
        $mfg_date = $request->input('mfg_date');        
        DB::update('update vaccines set product_name=?, lot_number=?,vials=?, expiry_date=? , mfg_date=? where vaccine_id=?',[$product_name,$lot_number,$vials,$expiry_date,$mfg_date,$id]);   

        echo "Record updated successfully.<br/>";
        return redirect()->route('post-list');
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
