<?php

namespace App\Http\Controllers;

use App\Mhs;
use App\Prodi;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs= Mhs::all();
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi =Prodi::pluck('kode_prodi','id');
        return view('mhs.create',compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Mhs::create($input);
        return redirect(route('mhs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = Mhs::find($id);
        return view('mhs.show',compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mhs::find($id);
        $prodi = Prodi::pluck('Kode_prodi','id');
        return view('mhs.edit',compact('mhs', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_method','_token');
        Mhs::where('id',$id)->update($input);
        return redirect (route('mhs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mhs::destroy ($id);
        return redirect (route('mhs.index'));
    }

    public function showMhsByProdi($id)
    {
        $mhs = Mhs::where('prodi_id',$id)->get();
        return view('mhs.index',compact('mhs'));
    }
}
