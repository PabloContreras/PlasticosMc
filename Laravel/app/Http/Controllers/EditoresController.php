<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editor;

class EditoresController extends Controller
{
    public function indexForAdmin(){
    	$editores = Editor::all();
    	return view('admin.editores.index', compact('editores'));
    }

    public function createForAdmin(){
    	return view('admin.editores.create');
    }

    public function storeForAdmin(Request $request){
    	$editor = new Editor;
    	$editor->name = $request->name;
    	$editor->email = $request->email;
    	$editor->password = bcrypt($request->password);
    	//return $editor;
    	$editor->save();
    	return redirect('/admin/editores/');
    }
    public function showForadmin($id){
    	$editor = Editor::find($id);
    	return view('admin.editores.show', compact('editor'));
    }

    public function editForAdmin($id){
    	$editor = Editor::find($id);
    	return view('admin.editores.edit', compact('editor'));
    }

    public function updateForAdmin(Request $request, $id){
    	$editor = Editor::find($id);
    	$editor->name = $request->name;
    	$editor->email = $request->email;
    	$editor->password = bcrypt($request->password);
    	//return $editor;
    	$editor->save();
    	return redirect('/admin/editores');
    }

    public function destroyForAdmin($id){
    	$editor = Editor::find($id);
    	$editor->delete();
    	return redirect('/admin/editores');
    }
}
