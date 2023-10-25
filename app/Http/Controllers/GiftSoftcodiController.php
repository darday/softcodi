<?php

namespace App\Http\Controllers;

use App\Models\gift_softcodi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class GiftSoftcodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients = DB::table('clients')
        //     ->join('sales', 'clients.client_id', '=', 'sales.client_id')
        //     ->select('clients.*', 'sales.created_at as sales_created_date', 'sales.*')
        //     ->get();
        // dd($clients);

        $gifts = DB::table('gift_softcodis')
            ->orderBy('draw_date', 'desc')
            ->get();

        $giftJson = json_encode($gifts);

        return view('admin.gift.gift', ['gifts' => $gifts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gift.gift_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'img_gift_draw' => 'required|image',
        //     'img_gift_winner' => 'required|image'
        // ]);

        // return($request);


        $directory = storage_path() . '/app/public/gift_image/';
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true); // Crea la carpeta con permisos 0777 y habilita la creación de carpetas anidadas
        }
        $data = request()->except('_token');

        if ($request->hasFile('img_gift_draw') || $request->hasFile('img_gift_winner')) {
            $name_img = Str::random(10) . $request->file('img_gift_draw')->getClientOriginalName();
            $ruta = storage_path() . '/app/public/gift_image/' . $name_img;
            $img = Image::make($request->file('img_gift_draw'));
            $img->orientate();
            $img->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $img->destroy();

            $path1 = 'gift_image/' . $name_img;
            $data['img_gift_draw'] = $path1;

            $name_img = Str::random(10) . $request->file('img_gift_winner')->getClientOriginalName();
            $ruta = storage_path() . '/app/public/gift_image/' . $name_img;
            $img = Image::make($request->file('img_gift_winner'));
            $img->orientate();
            $img->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $img->destroy();

            $path2 = 'gift_image/' . $name_img;
            $data['img_gift_winner'] = $path2;
        } else {
            return response([
                "response" => '500',
                "success" => false,

            ]);
        }


        $data['img_gift_draw'] = $path1;
        $data['img_gift_winner'] = $path2;
        $data['created_at'] = Carbon::now();

        $res = gift_softcodi::insert($data);

        if ($res == 1) {
            return redirect()->route('admin_gift')->with('message', 'Sorteo Agregado  Exitosamente');
        } else {
            return ("No se ha agregado la venta");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gift_softcodi  $gift_softcodi
     * @return \Illuminate\Http\Response
     */
    public function show(gift_softcodi $gift_softcodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gift_softcodi  $gift_softcodi
     * @return \Illuminate\Http\Response
     */
    public function edit(gift_softcodi $gift_softcodi, $id)
    {
        $gift = gift_softcodi::where('gift_id', $id)->first();
        return view('admin.gift.gift_edit', ['gift' => $gift]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gift_softcodi  $gift_softcodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gift_softcodi $gift_softcodi)
    {

        $data = request()->except('_token');

        // return ($request);

        if ($request->hasFile('img_gift_draw')) {
            $gift =  gift_softcodi::where('gift_id', $request->gift_id)->firstOrFail();
            Storage::delete('public/' . $gift->img_gift_draw);
            // $path1 = $request->img_gift_draw->store('gift_image', 'public');
            // $data['img_gift_draw'] = $path1;
            $name_img = Str::random(10) . $request->file('img_gift_draw')->getClientOriginalName();
            $ruta = storage_path() . '/app/public/gift_image/' . $name_img;
            $img = Image::make($request->file('img_gift_draw'));
            $img->orientate();
            $img->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $img->destroy();


            $path1 = 'gift_image/' . $name_img;
            $data['img_gift_draw'] = $path1;
        }
        if ($request->hasFile('img_gift_winner')) {
            $gift =  gift_softcodi::where('gift_id', $request->gift_id)->firstOrFail();
            Storage::delete('public/' . $gift->img_gift_winner);
            // $path2 = $request->img_gift_winner->store('gift_image', 'public');
            // $data['img_gift_winner'] = $path2;
            $name_img = Str::random(10) . $request->file('img_gift_winner')->getClientOriginalName();
            $ruta = storage_path() . '/app/public/gift_image/' . $name_img;
            $img = Image::make($request->file('img_gift_winner'));
            $img->orientate();
            $img->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            $img->destroy();


            $path2 = 'gift_image/' . $name_img;
            $data['img_gift_winner'] = $path2;
        }



        $res = gift_softcodi::where('gift_id', $request->gift_id)->update($data);
        if ($res == 1) {
            return redirect()->route('admin_gift')->with('message', 'Sorteo Editado  Exitosamente');
        } else {
            return ("No se ha agregado el sorteo");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gift_softcodi  $gift_softcodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(gift_softcodi $gift_softcodi)
    {
        //
    }

    public function delete_gift (Request $request)
    {
        $query = DB::table('gift_softcodis')->where('gift_id', $request->gift_id)->delete();

        if ($query > 0) {
            return redirect()->route('admin_gift')->with('id', 'Se ha borrado el sorteo');
        } else {
            return ("No se ha borrado el sorteo");
        }

    }
}
