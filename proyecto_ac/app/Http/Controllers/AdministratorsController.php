<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Administrator;
use Laracasts\Flash\Flash;

class AdministratorsController extends Controller
{
    Public function index() 
    {
// 		$administrators=Administrator::orderBy('businessName','ASC')->paginate(10);
//        $administrators->each(function($administrators)
//            {
//                $administrators->people;
//                
                dd($administrators);
//            });
//            //dd($administrators);
//        return View('admin.administrators.index')->with('administrators',$administrators);
        return "admin";
    }

	Public function create()
	{
		$people =Person::orderBy('lastName','firstName','ASC')->pluck('lastName','id');

		return view('admin.administrators.create')->with('people',$people);
    }

	Public function store(Request $request)
	{
		$administrator=new Administrator($request->all());
        $administrator->save();
        Flash::success("Se agrego ".$administrator->businessName." de forma exitosa");
        return redirect()->route('administrators.index');
    }
}
