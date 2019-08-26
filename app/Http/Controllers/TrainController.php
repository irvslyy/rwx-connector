<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $train = Train::all();
        return view('read',['trains' => $train]);
    }
    public function indextwo()
    {
        return view('index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $train = new Train;
        $train->nama = $request->nama;
        $train->email = $request->email;
        $train->paket = $request->paket;
        $train->alamat = $request->alamat;
        $train->pembimbing = $request->pembimbing;
        $train->tanggal = $request->tanggal;
        $train->save();

        return redirect('/read');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $train = Train::find($id);
        return view('edit',['train' => $train]);
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
        
        $train = Train::find($id);
        $train->nama = $request->nama;
        $train->email = $request->email;
        $train->paket = $request->paket;
        $train->alamat = $request->alamat;
        $train->pembimbing = $request->pembimbing;
        $train->save();

        return redirect('/read');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $train = Train::find($id);
        $train->delete();

        return back();
    }
}
