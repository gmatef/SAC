<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Laracasts\Flash\Flash;

class ItemsController extends Controller
{
    Public function index() 
    {
 		$items=Item::orderBy('description','ASC')->paginate(10);
        return View('admin.items.index')->with('items',$items);
    }

	Public function create()
	{
		return view('admin.items.create');
    }

	Public function store(Request $request)
	{
		$item=new Item($request->all());
        $item->save();
        Flash::success("Se agrego ".$item->descripcion." de forma exitosa");
        return redirect()->route('items.index');
    }

	Public function show($id)
	{

    }

	Public function edit($id)
	{
		$item=Item::find($id);
        return view('admin.items.edit')->with('item',$item);
    }

	 public function update(Request $request, $id)  
    {
        $item= Item::find($id);
        $item->fill($request->all());
        $item->save();
        Flash::warning('Se edito correctamente');
        return redirect()->route('items.index');

    }

    public function destroy($id) 
    {
        $item=Item::find($id);
        $item->delete();
        flash($item->descripcion.' se elimino correctamente');
        return redirect()->route('items.index');
    }

}

