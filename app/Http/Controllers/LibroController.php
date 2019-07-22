<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index()
    {
        return view('libros');
    }

    public function librosAdd(Request $request)
    {
        $this->validate($request, ['Nombre' => 'required', 'Autor' => 'required', 'description' => 'required']);
        \App\Libro::create($request->all());
        return redirect()->route('libros')->with('success', 'Registro Satisfactorio');
    }
}
