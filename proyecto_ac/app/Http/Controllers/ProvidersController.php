<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Item;
use App\City;
use App\Person;
use Laracasts\Flash\Flash;

class ProvidersController extends Controller
{
     Public function index(Request $request) 
    {
 		$providers=Provider::orderBy('businessName','ASC')->paginate(10);
        $providers->each(function($providers)
            {
                $providers->items;
                $providers->people;
                $providers->cities;
            });
        dd($providers);
        return View('admin.providers.index')->with('providers',$providers);
    }

	Public function create()
	{

		$items  = Item::orderBy('description','ASC')->pluck('description','id');
		$people = Person::orderBy('lastName', 'ASC')->pluck('lastName','id');
		$cities = City::orderBy('city', 'ASC')->pluck('city','id');
		return view('admin.providers.create')
			->with('items',$items)
			->with('people',$people)
			->with('cities',$cities);
    }

	Public function store(Request $request)
	{
		$provider=new Provider($request->all());
        $provider->save();
        Flash::success("Se agrego ".$provider->businessName." de forma exitosa");
        return redirect()->route('providers.index');
    }

	Public function show($id)
	{

    }

	Public function edit($id)
	{
		$provider=Provider::find($id);
        return view('admin.providers.edit')->with('provider',$provider);
    }

	 public function update(Request $request, $id)  
    {
        $provider= Provider::find($id);
        $provider->fill($request->all());
        $provider->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('provider.index');

    }

    public function destroy($id) 
    {
        $provider=Provider::find($id);
        $provider->delete();
        flash('El proveedor '.$provider->businessName.' se elimino correctamente');
        return redirect()->route('providers.index');
    }
}
