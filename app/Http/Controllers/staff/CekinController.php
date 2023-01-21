<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Tiket;
use Illuminate\Http\Request;

class CekinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('staff.cekin.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // menangkap data pencarian
        $request->validate([
            'id' => 'required',

        ], [
            'id.required' => 'ID harus diisi',
        ]);
        $id = $request->get('id');
        // mengambil data dari table pegawai sesuai pencarian data
        $hasil = Tiket::where('id', 'like', "%" . $id . "%")->with('konser')->with('user')
            ->get();
        // mengirim data pegawai ke view index
        return view('staff.cekin.hasil', compact('hasil', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Tiket::find($id);
        $data->status = '1';
        $data->save();
        return redirect()->route('cekin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
