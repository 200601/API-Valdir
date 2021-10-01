<?php

namespace App\Http\Controllers\API;
use App\http\Controllers\Controller;
use App\Models\vendas;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class vendascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "itens" => vendas::pluck('nome'),
            "total_value" => vendas::sum('valor')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = date('Y-m-d H:i:s');
        $vendas= new vendas();
        $vendas->create($data);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function show(vendas $vendas)
    {
        return $vendas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function edit(controller $controller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendas $vendas)
    {
        $vendas->update($request->all()); 
        return $vendas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendas $vendas)
    {
        $vendas->delete();
        return response()->json(null);
    }
}
