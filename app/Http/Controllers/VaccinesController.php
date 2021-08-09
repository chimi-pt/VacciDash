<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreVaccineRequest;
use App\Http\Requests\UpdateVaccineRequest;
use Symfony\Component\HttpFoundation\Response;

class VaccinesController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::all();

        return view('post-datatable', compact('tasks'));
    }

    public function create()
    {
        return view('vaccine.create');
    }

    public function store(StoreVaccineRequest $request)
    {
        return redirect()->route('post-datatable');
    }

    public function show(Vaccine $vaccine)
    {
        return view('post-datatable', compact('task'));
    }

    public function edit(Vaccine $vaccine)
    {
        return view('post-datatable', compact('task'));
    }

    public function update(UpdateVaccineRequest $request, Vaccine $vaccine)
    {
        return redirect()->route('post-datatable');
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();

        return redirect()->route('post-datatable');
    }
}
