<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
	
	public function profile(){
    	$id = Auth::id();
    	$admin = Admin::find($id);

    	return view('admin.profile', compact('admin'));
    }
    public function index(){
    	$administradores = Admin::all();
    	return view('admin.admins.index', compact('administradores'));
    }

    public function create(){

    	return view('admin.admins.create');
    }
    public function store(Request $request){
    	$admin = new Admin;
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = bcrypt($request->password);
    	$admin->save();
    	//return $admin;
    	return redirect('/admin/administradores');
    }

    public function edit($id){
    	$admin = Admin::find($id);
    	return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id){
    	$admin = Admin::find($id);
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = bcrypt($request->password);
    	$admin->save();
    	//return $admin;
    	return redirect('/admin/administradores');
    }

    public function show($id){
    	$admin = Admin::find($id);
    	return view('admin.admins.show', compact('admin'));
    }
    public function destroy($id){
    	$admin = Admin::find($id);
    	$admin->delete();
    	return redirect('/admin/administradores');
    }
}
