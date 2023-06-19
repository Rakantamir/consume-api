<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('api/sampah');
        $sampah = $data->json();
        return view('sampah.index')->with('sampah', $sampah['data']);
    }

    public function create()
    {
        return view('sampah.create');
    }

    public function store(Request $request)
    {
        if ($request->total_karung_sampah > 3) {
            $kriteria = "collapse";
        }else {
            $kriteria = "standar";
        }
        $upload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];
            
        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/sampah/store', $upload);
        return redirect('/sampah');
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $sampah = $data->json();
        return view('sampah.update')->with('sampah', $sampah['data']);
    }

    public function update(Request $request, $id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $sampah = $data->json('data');
        if ($request->total_karung_sampah > 3) {
            $kriteria = "collapse";
        }else {
            $kriteria = "standar";
        }
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('api/sampah/update', $id, $payload);

        return redirect('/sampah');
    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        // dd($data);
        $sampah = $data->json();
        return view('sampah.show')->with('sampah', $sampah['data']);
    }

    public function destroy (Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/sampah/delete', $id);
        return redirect('/sampah');
    }

    public function trash()
    {
        $proses = (new BaseApi)->trash ('api/sampah/show/trash');
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampahTrash = $proses->json('data');
            return view('sampah.trash')->with (['sampah' => $sampahTrash]);
         }
        }

    public function restore($id)
    {
        $proses = (new BaseApi)->permanent('/api/sampah/trash/restore/'.$id);
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/sampah')->with('success', 'Berhasil mengembalikan data dari sampah');
        }
    }

    public function permanent($id)
    {
        $proses = (new BaseApi)->permanent('/api/sampah/trash/delete/permanent/'.$id);

        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect()->back()->with('danger', 'Berhasil hapus data secara permanent');
        }
    }
}

