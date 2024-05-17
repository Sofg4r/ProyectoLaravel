<?php

namespace App\Http\Controllers;

use App\Models\juguete;
use App\Models\categoria;
use Illuminate\Http\Request;

class JugueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juguetes = Juguete::all();
        return view('jugueteIndex', compact('juguetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('jugueteCreate', compact('categorias'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Juguete::create([
        //     'marca' => $request->('marca'),
        //     'marca' => $request->('marca'),
        // ])

        // $juguetes = Juguete::all();
        // return view('/jugueteIndex', compact('juguetes'));
        
        // $datosJuguete = $request->only(['marca','precio']);
        // Juguete::create($datosJuguete);

        $juguete = new Juguete();
        $juguete->Marca = $request->Marca;
        $juguete->Precio = $request->Precio;
        $juguete->save();

        $juguete->categorias()->attach($request->categorias);


        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/juguete');
    }

    /**
     * Display the specified resource.
     */
    public function show(Juguete $juguete)
    {
        return view('/jugueteShow',compact('juguete'));
        //dd($juguete);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juguete $juguete)
    {
        return view('jugueteEdit', compact('juguete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juguete $juguete)
    {
        Juguete::where('id', $juguete->id)->update($request->except('_token', '_method', 'action'));
        Session()->flash('success', 'Se ha modificado con éxito');
        return redirect('/juguete');

        // $juguete->nombre = $request->nombre;
        // $juguete->marca = $request->marca;
        // $juguete->precio = $request->precio;
        // $juguete->save();
    
        // if ($request->has('nombres')) {
        //     $juguete->nombres()->sync($request->nombres);
        // } else {
        //     $juguete->nombres()->detach(); 
        // }
    
        // return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juguete $juguete)
    {
        $juguete->delete();
        Session()->flash('success','Se ha eliminado con éxito');
        return redirect('/juguete');
    }
}
