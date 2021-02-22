<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Categoria;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    
    public function __invoke(){
        return view('home');
    }
    /*public function index2(Categoria $umbroshop){
        $categorias = Categoria::Orderby('id','desc')->paginate();

        return view('articulos.index',compact('categorias'));
    }*/

    public function guardar(Request $request, Categoria $category){
        $request()->validate([
            'nombre' => 'required|unique'
        ]);

        $category = Categoria::create([
            'nombre' => $category->nombre
        ]);
        return view('categoria.create', compact('category'))->with('info4','La categoria fue creada con exito!');

    }

    public function ver(){
        return view('articulos.show');
    }
    
}
