<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypePerson;
use Laracasts\Flash\Flash;

class TypePeopleController extends Controller
{
    public function index() 
    {
        $typePeople=TypePerson::orderBy('id','ASC')->paginate(10);
        return View('admin.typePeople.index')->with('typePeople',$typePeople);
    }

	public function create() 
    {
        return view('admin.typePeople.create');
    }

    public function store(Request $request) 
    {
        $typePerson=new TypePerson($request->all());
        $typePerson->save();
        Flash::success("Se agrego ".$typePerson->description." de forma exitosa");
        return redirect()->route('typePeople.index');

    }

    public function show($id) 
    {}

    public function edit($id) 
    {
        $typePerson=TypePerson::find($id);
        return view('admin.TypePeople.edit')->with('typePerson',$typePerson);
    }

    public function update(Request $request, $id)  
    {
        $typePerson= TypePerson::find($id);
        $typePerson->fill($request->all());
        $typePerson->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('typePeople.index');

    }

    public function destroy($id) 
    {
        $typePerson=TypePerson::find($id);
        $typePerson->delete();
        flash('El tipo '.$typePerson->description.' se elimino correctamente');
        return redirect()->route('typePeople.index');
    }

}
