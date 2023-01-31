<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $data_warga = Warga::all("id","nama", "jenis_kelamin", "no_rumah"); 

        return response()->json([
            "success" => true,
            "message" => "Berhasil Coy",
            "data" => $data_warga
        ], 200);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Warga::create([
            "nama" => $request->name,
            "jenis_kelamin" => $request->jenis_kelamin,
            "no_rumah" => $request->no_rumah
        ]);


        return response()->json([
            "success" => true,
            "message" => "Berhasil Coy",
            "data" => $request->all()
        ], 200);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $update_warga = Warga::find($id);

        $update_warga->update([
            "nama" => $request->name,
            "jenis_kelamin" => $request->jenis_kelamin,
            "no_rumah" => $request->no_rumah,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Berhasil Di Ubah",
            "data" => $update_warga
        ], 200);
    }

    public function destroy($id)
    {
        $hapus_warga = Warga::find($id);

        $hapus_warga->delete();

        return response()->json([
            "success" => true,
            "message" => "Berhasil Di Hapus",
            "data" => $hapus_warga
        ], 200);
    }
}
