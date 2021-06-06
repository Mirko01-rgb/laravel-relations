<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;

class TestController extends Controller
{

 public function home (){
   $cars = Car::all();
    return view('pages.home', compact('cars'));
  }

  public function pilot($id){
    $pilot = Pilot::findOrFail($id);
    // dd($id);
    // dd($pilot);
    return view('pages.pilot', compact('pilot'));
  }

  public function create(){
    $brands = Brand::all();

    $pilots = Pilot::all();
    return view('pages.create', compact('brands', 'pilots'));
  }

  public function storeCar(Request $request) {
    //dd($request -> all());
    $validate = $request -> validate([
      'name' => 'required|string|min:3',
      'model' => 'required|integer',
      'kw' => 'required|integer|min:10|max:3000',
    ]);

    $brand = Brand::findOrFail($request -> get('brand_id'));
    //dd($brand);
    $car = Car::make($validate);

    //Brand
    $car -> brand() -> associate($brand);
    $car -> save();

    //Pilot
    $car -> pilots() -> attach($request -> get('pilot_id'));
    $car -> save();
    return redirect() -> route('home');
  }
}
