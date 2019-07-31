<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicaciones;
use Auth;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class PublicacionesController extends Controller
{
	/*
				Lógica para avisos
	*/
    public function indexAvisosForAdmin(){
    	$titulo = 'aviso';
    	$publicaciones = Publicaciones::where('tipo_publicacion',$titulo)->get();
    	//return $publicaciones;
    	return view('admin.publicaciones.index', compact('titulo', 'publicaciones'));
    }
    public function createAvisosForAdmin(){
    	$titulo = 'aviso';
    	return view('admin.publicaciones.create', compact('titulo'));
    }
    public function storeAvisosForAdmin(Request $request){
    	$aviso = new Publicaciones;
    	$aviso->owner_id = Auth::id();
    	$aviso->contenido = $request->contenido;
    	$aviso->tipo_publicacion = 'aviso';
        $aviso->empresa = $request->empresa;
        $aviso->area = $request->area;
        $aviso->puesto = $request->puesto;
        $aviso->persona = $request->persona;
        
        //bandera
        $aviso->imagen = $request->imagen;
        if( $aviso->imagen === 'on' && $file = $request->file('archivo')){

            //recupera el archivo
            $file = $request->file('archivo');
            // define la ruta publica
            $path = public_path().'/uploads/publications';
            //crea el archivo en la ruta con el nombre original del archivo
            $file->move($path, $file->getClientOriginalName());
            //guarda en el campo 'archivo' para recuperar en la vista
            $aviso->archivo = $file->getClientOriginalName();

        }elseif( $aviso->imagen != 'on' && $request->avatar ){
            $avatar = $request->avatar;
            $filename = time() . '.' . $avatar->extension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/uploads/publications/' . $filename));

            $aviso->archivo = $filename;
        }else{
            $aviso->archivo = null;
        }

    	$aviso->save();
    	return redirect('/admin/publicaciones/avisos');
    }
    public function showAvisosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	return view('admin.publicaciones.show', compact('publicacion'));
    }
    public function destroyAvisosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	$publicacion->delete();
    	return redirect('/admin/publicaciones/avisos');
    }
    /*
				Lógica para documentos
	*/
    public function indexDocumentosForAdmin(){
    	$titulo = 'documento';
    	$publicaciones = Publicaciones::where('tipo_publicacion',$titulo)->get();
    	//return $publicaciones;
    	return view('admin.publicaciones.index', compact('titulo', 'publicaciones'));
    }
    public function createDocumentosForAdmin(){
    	$titulo = 'documento';
    	return view('admin.publicaciones.create', compact('titulo'));
    }
    public function storeDocumentosForAdmin(Request $request){
    	$aviso = new Publicaciones;
    	$aviso->owner_id = Auth::id();
    	$aviso->contenido = $request->contenido;
    	$aviso->tipo_publicacion = 'documento';
    	$aviso->archivo = null;
    	$aviso->empresa = $request->empresa;
    	$aviso->area = $request->area;
    	$aviso->puesto = $request->puesto;
    	$aviso->persona = $request->persona;
        //bandera
        $aviso->imagen = $request->imagen;
        if( $aviso->imagen === 'on' && $file = $request->file('archivo')){

            //recupera el archivo
            $file = $request->file('archivo');
            // define la ruta publica
            $path = public_path().'/uploads/publications';
            //crea el archivo en la ruta con el nombre original del archivo
            $file->move($path, $file->getClientOriginalName());
            //guarda en el campo 'archivo' para recuperar en la vista
            $aviso->archivo = $file->getClientOriginalName();

        }elseif( $aviso->imagen != 'on' && $request->avatar ){
            $avatar = $request->avatar;
            $filename = time() . '.' . $avatar->extension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/uploads/publications/' . $filename));

            $aviso->archivo = $filename;
        }else{
            $aviso->archivo = null;
        }

    	$aviso->save();
    	return redirect('/admin/publicaciones/documentos');
    }
    public function showDocumentosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	return view('admin.publicaciones.show', compact('publicacion'));
    }
    public function destroyDocumentosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	$publicacion->delete();
    	return redirect('/admin/publicaciones/documentos');
    }
    /*
				Lógica para eventos
	*/
    public function indexEventosForAdmin(){
    	$titulo = 'evento';
    	$publicaciones = Publicaciones::where('tipo_publicacion',$titulo)->get();
    	//return $publicaciones;
    	return view('admin.publicaciones.index', compact('titulo', 'publicaciones'));
    }
    public function createEventosForAdmin(){
    	$titulo = 'evento';
    	return view('admin.publicaciones.create', compact('titulo'));
    }
    public function storeEventosForAdmin(Request $request){
    	$aviso = new Publicaciones;
    	$aviso->owner_id = Auth::id();
    	$aviso->contenido = $request->contenido;
    	$aviso->tipo_publicacion = 'evento';
    	$aviso->archivo = null;
    	$aviso->empresa = $request->empresa;
    	$aviso->area = $request->area;
    	$aviso->puesto = $request->puesto;
    	$aviso->persona = $request->persona;
        //bandera
        $aviso->imagen = $request->imagen;
        if( $aviso->imagen === 'on' && $file = $request->file('archivo')){

            //recupera el archivo
            $file = $request->file('archivo');
            // define la ruta publica
            $path = public_path().'/uploads/publications';
            //crea el archivo en la ruta con el nombre original del archivo
            $file->move($path, $file->getClientOriginalName());
            //guarda en el campo 'archivo' para recuperar en la vista
            $aviso->archivo = $file->getClientOriginalName();

        }elseif( $aviso->imagen != 'on' && $request->avatar ){
            $avatar = $request->avatar;
            $filename = time() . '.' . $avatar->extension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/uploads/publications/' . $filename));

            $aviso->archivo = $filename;
        }else{
            $aviso->archivo = null;
        }
    	$aviso->save();
    	return redirect('/admin/publicaciones/eventos');
    }
    public function showEventosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	return view('admin.publicaciones.show', compact('publicacion'));
    }
    public function destroyEventosForAdmin($id){
    	$publicacion = Publicaciones::find($id);
    	$publicacion->delete();
    	return redirect('/admin/publicaciones/eventos');
    }


    public function getDownload($id){
        //PDF file is stored under project/public/download/info.pdf
        $publicacion = Publicaciones::find($id);
        //$file= $publicacion->archivo;
        $file =  public_path().'/uploads/publications/'. $publicacion->archivo;
        return Response::download($file);
    }
}
