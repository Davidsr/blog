<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	//$posts = Post::all();
    	// Para obtener los post ordenador por fecha de creacion descendente
    	$posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)//$id) // la variable post debe llamarse igual a la variable en route
    {
    	// La primer forma es buscar el post con $id
    	//$post = Post::find($id);

    	// La segunda forma es pasar un objeto model de post
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	// Debug request
    	//dd($request->all());

    	// Validar el "formulario" datos del request
    	$request->validate([
    		'titulo' => 'required',
    		'mensaje' => 'required'
    	]);
    	
    	$post = new Post;

    	// Obtener datos del formulario
    	$post->titulo = $request->titulo;
    	// Otra manera de acceder al input
    	//$post->titulo = $request->input('titulo');
    	$post->mensaje = $request->mensaje;

    	// Guardar en la base de datos
    	$post->save();
    	
    	// Se debe permitir el llenado masivo de los campos en Model Post
    	/*
    	Post::create([
    		'titulo' => $request->titulo,
    		'mensaje' => $request->mensaje
    	]);
    	*/

    	// Regresar a la pagina principal
    	return view('posts.index');
    }
}
