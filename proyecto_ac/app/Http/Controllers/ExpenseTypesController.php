<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseType;
use Laracasts\Flash\Flash;

class ExpenseTypesController extends Controller
{
    public function index(Request $request) 
    {
        $types=ExpenseType::orderBy('description','ASC')->paginate(10);
        return View('admin.expensetypes.index')->with('types',$types);
    }

	public function create() 
    {
        return view('admin.expensetypes.create');
    }

    public function store(Request $request) 
    {
        $type=new ExpenseType($request->all());
        $type->save();
        Flash::success("Se agrego ".$type->description." de forma exitosa");
        return redirect()->route('expensetypes.index');

    }

    public function show($id) 
    {}

    public function edit($id) 
    {
        $type=ExpenseType::find($id);
        return view('admin.expensetypes.edit')->with('type',$type);
    }

    public function update(Request $request, $id)  
    {
        $type= ExpenseType::find($id);
        $type->fill($request->all());
        $type->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('expensetypes.index');

    }

    public function destroy($id) 
    {
        $type=ExpenseType::find($id);
        $type->delete();
        flash('El tipo '.$type->description.' se elimino correctamente');
        return redirect()->route('expensetypes.index');
    }
}
