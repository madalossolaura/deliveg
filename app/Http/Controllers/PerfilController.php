<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Pedido;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        
    public function mostrarPerfil (){
        $usuarios = Usuario::all()->where('id', '=', Auth::user()->id); 
        $pedidos = Pedido::all()->where('user_id', '=', Auth::user()->id);    
        return view('perfil')->with('usuarios', $usuarios)->with('pedidos', $pedidos); 
    }
}
