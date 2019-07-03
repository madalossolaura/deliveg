<?php

namespace App\Http\Controllers;
use App\Pedido;

use Request;
// use App\Auth;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function setNewPedido(){
        $pedidos = new Pedido();
        
        $pedidos->user_id = Auth::user()->id;
        $pedidos->items = Request::get('items');
        $pedidos->items_id = Request::get('items_id');
        $pedidos->total = Request::get('total');
        $pedidos->status = Request::get('status');
        
        $pedidos->save();
        
        return response()->json($pedidos,201);

    }

    public function pagamento() {
        $pedido = Pedido::all()->last();

        return response()->json($pedido);
    }

    public function pagar() {
        $pedido = Pedido::all()->last();

        $pedido->status = Request::get('status');

        $pedido->save();

        return response()->json($pedido, 201);
    }
}
