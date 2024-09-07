<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = [
            [
                'id' => 1,
                'cod_pedido' => 123,
                'cliente' => 'Daniel',
                'produto' => 'Monitor',
                'quantidade' => 2,
                'valor_pedido' => 35.99,
                'valor_desc' => 36.99,
            ]
        ];

        $pedidoList = array_column($pedidos, 'name');
        return view('pedido', compact('pedidos', 'pedidoList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
