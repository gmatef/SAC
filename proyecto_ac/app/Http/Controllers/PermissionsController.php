<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Laracasts\Flash\Flash;

class PermissionsController extends Controller
{
    Public function index() 
    {
 		$permissions=Permission::orderBy('description','ASC')->paginate(10);
        return View('admin.permissions.index')->with('permissions',$permissions);
    }

	Public function create()
	{
		return view('admin.permissions.create');
    }

	Public function store(Request $request)
	{
		$permission=new Permission($request->all());
        $permission->save();
        Flash::success("Se agrego ".$permission->descripcion." de forma exitosa");
        return redirect()->route('permissions.index');
    }

	Public function show($id)
	{

    }

	Public function edit($id)
	{
		$permission=Permission::find($id);
        return view('admin.permissions.edit')->with('permission',$permission);
    }

	 public function update(Request $request, $id)  
    {
        $permission= Permission::find($id);
        $permission->fill($request->all());
        $permission->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('permissions.index');

    }

    public function destroy($id) 
    {
        $permission=Permission::find($id);
        $permission->delete();
        flash('El tipo '.$permission->descripcion.' se elimino correctamente');
        return redirect()->route('permissions.index');
    }

}
