<?php

namespace App\Http\Controllers;

use App\Tugasakhir;
use Illuminate\Http\Request;

class TugasakhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.ta.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ta.create');
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
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function show(Tugasakhir $tugasakhir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugasakhir $tugasakhir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugasakhir $tugasakhir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugasakhir $tugasakhir)
    {
        //
    }
}
