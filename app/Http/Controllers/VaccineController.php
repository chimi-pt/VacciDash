<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view('vaccine.edit');
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
