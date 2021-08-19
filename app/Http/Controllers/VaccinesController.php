<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreVaccineRequest;
use App\Http\Requests\UpdateVaccineRequest;
use Symfony\Component\HttpFoundation\Response;

class VaccinesController extends Controller
{
    public function create()
    {
        //
        return view('vaccine.create');
    }
}
