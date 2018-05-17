<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show($id)
    {
    	return view('posts.show');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	// Debug request
    	//dd($request->all());
    	/*
    	$post = new Post;

    	// Obtener datos del formulario
    	$post->titulo = $request->titulo;
    	// Otra manera de acceder al input
    	//$post->titulo = $request->input('titulo');
    	$post->mensaje = $request->mensaje;

    	// Guardar en la base de datos
    	$post->save();
    	*/
    	// Se debe permitir el llenado masivo de los campos en Model Post
    	Post::create([
    		'titulo' => $request->titulo,
    		'mensaje' => $request->mensaje
    	]);

    	// Regresar a la pagina principal
    	return view('posts.index');
    }
}
