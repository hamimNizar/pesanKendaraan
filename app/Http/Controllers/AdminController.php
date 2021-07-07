<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('admin')) {

            $cars = Car::all();
            // var_dump($cars);

            return view('admin.index', ['cars' => $cars]);
        } else {
            return redirect('/');
        } 
    }
}
