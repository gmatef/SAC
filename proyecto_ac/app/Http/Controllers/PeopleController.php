<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\TypePerson;
use App\Permission;
use App\Person;
use Laracasts\Flash\Flash;

class PeopleController extends Controller
{
    Public function index() 
    {
 		$people=Person::orderBy('lastName','ASC')->paginate(10);
        $people->each(function($people)
            {
                $people->cities;
                $people->typepeople;
            });
        //dd($people);
        return View('admin.people.index')->with('people',$people);
    }

	Public function create()
	{
		$cities =City::orderBy('city','ASC')->pluck('city','id');
		$tp =TypePerson::orderBy('description','ASC')->pluck('description','id');

		return view('admin.people.create')
			->with('cities',$cities)
			->with('tp',$tp);
    }

	Public function store(Request $request)
	{
		$person=new Person($request->all());
        $person->save();
        Flash::success("Se agrego ".$person->firsName." de forma exitosa");
        return redirect()->route('people.index');
    }

	Public function show($id)
	{

    }

	Public function edit($id)
	{
		$person=Person::find($id);
        return view('admin.people.edit')->with('person',$person);
    }

	 public function update(Request $request, $id)  
    {
        $person= Person::find($id);
        $person->fill($request->all());
        $person->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('people.index');

    }

    public function destroy($id) 
    {
        $person=Person::find($id);
        $person->delete();
        flash('El tipo '.$person->descripcion,' se elimino correctamente');
        return redirect()->route('people.index');
    }
}
