<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show','index');
    }

    public function index()
    {
        $articulos = Categoria::Orderby('id','desc')->paginate();

        return view('articulos.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Articulo $articulo)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
            'nombre' => 'required',
            'codigo' => 'required',
            'categoria' => 'required',
            'talla' => 'required',
            'precio' => 'required'
        ]);
        
        $articulo = $request->all();

        if($imagenes = $request->file('file')){
            $file = $imagenes->getClientOriginalName();
            $imagenes->move('images', $file);
            $articulo['file']= $file;
        }

        Articulo::create($articulo);

        /*$imagenes = $request->file('file')->store('public/img');
        $file = Storage::url($imagenes);
        
        $articulo = articulo::create($request->all());*/
        
        /*Articulo::create([
            'nombre' => $articulo->nombre,
            'codigo' => $articulo->codigo,
            'categoria' => $articulo->categoria,
            'talla' => $articulo->talla,
            'precio' => $articulo->precio,
            'file' => $file
        ]);*/
        return view('articulos.create', compact('articulo'))->with('info1','El Articulo fue creado con exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $umbroshop)
    {
        //$articulo = $request->umbroshop;
        return view('articulos.show',compact('umbroshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo $umbroshop)
    {
        return view('articulos.edit',compact('umbroshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo $umbroshop)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'categoria' => 'required',
            'talla' => 'required',
            'precio' => 'required',
            'file' => 'required|images|max:2048'
        ]);
        $umbroshop->update($request->all());
        return view('articulos.show', compact('umbroshop'))->with('info2','El Articulo fue modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo $umbroshop)
    {
        $umbroshop->delete();
        return redirect()->route('umbroshop.index')->with('info3','El Articulo fue eliminado con exito!');
    }
    public function category(Categoria $category){
        $productos = Articulo::where('categoria', $category->nombre)
                    ->latest('id')
                    ->paginate();
        return view('layouts.partials.productos' ,compact('productos','category'));
    }
}
