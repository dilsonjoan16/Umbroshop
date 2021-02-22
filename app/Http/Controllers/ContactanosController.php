<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use app\Mail\ContactanosMailable;
use NunoMaduro\Collision\Provider;



class ContactanosController extends Controller
{
    /*public function nosotros(){
        return view('layouts.nosotros');
    }*/
    public function index(){
        return view('contactanos.index');
    }
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required'
        ]);

        $contacto = new ContactanosMailable($request->all());
        Mail::to('dilsonjoan16@gmail.com')->send($contacto);
        return redirect()->route('umbroshop.contactanos.index')->with('info','Recibimos tu mensaje exitosamente! Te responderemos en menos de 24 horas.');
    }
}
