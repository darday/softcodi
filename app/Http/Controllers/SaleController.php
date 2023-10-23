<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('clients')
            ->join('sales', 'clients.client_id', '=', 'sales.client_id')
            ->select('clients.*', 'sales.created_at as sales_created_date', 'sales.*')
            ->where('status', '=', 1)
            ->get();

            $total = $clients->sum('price');


        return view('admin.sales.sales', ['clients' => $clients,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.sales_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = clients::where('ci', $request->ci)->get();

        if ($client->count()) {

            $client = clients::where('ci', $request->ci)->get();

            $query = DB::table('sales')->insert([
                'client_id' => $client[0]['client_id'], // Puedes cambiar esto según el CI del cliente.
                'sale_type' => $request->sale_type,
                'description' => $request->description,
                'price' => $request->price,
                'status' => '1',
                'created_at' => now(), // Esto establecerá la marca de tiempo de creación en la hora actual.
                'updated_at' => now(), // Esto establecerá la marca de tiempo de actualización en la hora actual.
            ]);
        } else {
            $query1 = DB::table('clients')->insert([
                'ci' => $request->ci, // Puedes cambiar esto según el CI del cliente.
                'name' => $request->name,
                'last_name' => $request->last_name,
                'phone' => $request->phone, // Puedes cambiar esto según el número de teléfono.
                'address' => $request->address,
                'email' => $request->email, // Puedes cambiar esto según el correo electrónico.
                'created_at' => now(), // Esto establecerá la marca de tiempo de creación en la hora actual.
                'updated_at' => now(), // Esto establecerá la marca de tiempo de actualización en la hora actual.
            ]);

            $client = clients::where('ci', $request->ci)->get();

            $query2 = DB::table('sales')->insert([
                'client_id' => $client[0]['client_id'], // Puedes cambiar esto según el CI del cliente.
                'sale_type' => $request->sale_type,
                'description' => $request->description,
                'price' => $request->price,
                'status' => '1',
                'created_at' => now(), // Esto establecerá la marca de tiempo de creación en la hora actual.
                'updated_at' => now(), // Esto establecerá la marca de tiempo de actualización en la hora actual.
            ]);

            if ($query1 && $query2 == 1)
                $query = 1;
        }

        if ($query == 1) {
            return redirect()->route('sale')->with('id', 'Venta Agregada Exitosamente');
        } else {
            return ("No se ha agregado la venta");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        //
    }

    public function limpiar_ventas()
    {
        $query = DB::table('sales')->update([
            'status' => 0, // Puedes cambiar esto según el CI del cliente. 
        ]);
        if ($query > 0) {
            return redirect()->route('sale')->with('id', 'Se han Limpiado las ventas');
        } else {
            return ("No se ha agregado la venta");
        }
    }

    public function borrar_venta(Request $request){

        // dd( $request);
        // return $request;
        $query = DB::table('sales')->where('sale_id', $request->sale_id)->delete();

        if ($query > 0) {
            return redirect()->route('sale')->with('id', 'Se ha borrado la venta');
        } else {
            return ("No se ha agregado la venta");
        }

    }
}
