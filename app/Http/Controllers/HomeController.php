<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $select = \App\Models\DataGuru::All();
        $selectwhere = \App\Models\DataGuru::where('kelamin', 'laki-laki', function ($query) {
            $query->select('*')
            ->from('data_guru');
        })->get();
        $selectjoin = \App\Models\DataGuru::join('tbl_jadwal', 'data_guru.id_guru', '=', 'tbl_jadwal.id_guru')
        ->select('data_guru.*', 'tbl_jadwal.*')
        ->get();
        $selectjoinlike = \App\Models\DataGuru::orWhere('nama_guru', 'like', '%' . 'Budi' . '%')
        ->join('tbl_jadwal', 'data_guru.id_guru', '=', 'tbl_jadwal.id_guru')
        ->select('data_guru.*', 'tbl_jadwal.*')
        ->get();

        return view('0241home' , ['select' => $select, 'selectwhere' => $selectwhere, 'selectjoin' => $selectjoin,  'selectjoinlike' => $selectjoinlike]);

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
