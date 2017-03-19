<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\City;
use App\Province;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class CitiesController extends Controller
{
    Public function index(Request $request) 
    {
 		$cities=City::orderBy('id','ASC')->paginate(10);
        $cities->each(function($cities)
            {
                $cities->provinces();

                dd($cities->fkProvince);
                //dd($cities->provinces);//trae null
            });
        //dd(phpinfo());
        //dd($cities);
        return View('admin.cities.index')->with('cities',$cities);
    }

	Public function create()
	{
		$provinces =Province::orderBy('province','ASC')->pluck('province','id');
		return view('admin.cities.create')->with('provinces',$provinces);
    }

	Public function store(Request $request)
	{
		$city=new City($request->all());
        $city->save();
        Flash::success("Se agrego ".$city->city." de forma exitosa");
        return redirect()->route('cities.index');
    }

	Public function show($id)
	{

    }

	Public function edit($id)
	{
		$city=City::find($id);
        $city->provinces;
        $provinces=Province::orderBy('province','ASC')->pluck('province','id');
        
        dd($city->provinces); //lo pongo en la vista pq este seleccionado
        return view('admin.cities.edit')
            ->with('city',$city)
            ->with('provinces',$provinces);
    }

	 public function update(Request $request, $id)  
    {
        $city= City::find($id);
        $city->fill($request->all());
        $city->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('cities.index');
    }

    public function destroy($id) 
    {
        $city=City::find($id);
        $city->delete();
        flash('El tipo '.$city->city.' se elimino correctamente');
        return redirect()->route('cities.index');
    }
}
