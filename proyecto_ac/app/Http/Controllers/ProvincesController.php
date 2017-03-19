<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use Laracasts\Flash\Flash;

class ProvincesController extends Controller
{
    public function index(Request $request) 
    {
        $provinces=Province::orderBy('province','ASC')->paginate(10);
        return View('admin.provinces.index')->with('provinces',$provinces);
    }

	public function create() 
    {
        return view('admin.provinces.create');
    }

    public function store(Request $request) 
    {
        $province=new Province($request->all());
        $province->save();
        Flash::success("Se agrego ".$province->province." de forma exitosa");
        return redirect()->route('provinces.index');

    }

    public function show($id) 
    {}

    public function edit($id) 
    {
        $province=Province::find($id);
        return view('admin.provinces.edit')->with('province',$province);
    }

    public function update(Request $request, $id)  
    {
        $province= Province::find($id);
        $province->fill($request->all());
        $province->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('provinces.index');

    }

    public function destroy($id) 
    {
        $province=Province::find($id);
        $province->delete();
        flash('El tipo '.$province->province.' se elimino correctamente');
        return redirect()->route('provinces.index');
    }
}
