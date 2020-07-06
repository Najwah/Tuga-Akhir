<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Dosen;
use App\Inventaris;
use App\Lab;
use App\SumberDana;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris=Inventaris::all();
        return view('inventaris.index',['inventaris'=>$inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sumberDana = SumberDana::all();
        $barang = Barang::all();
        return view('inventaris.tambah',[
            "sumberDana"=>$sumberDana,
            "barang"=>$barang
        ]);
    }

    public function createDua(Request $request)
    {

        $sumberDana = SumberDana::all();
        $barang = Barang::all();

        if ($request->peruntukan == "lab"){
            $lab = Lab::all();
            return view('inventaris.tambahLab',[
                "data" => $request->except('peruntukan'),
                "lab"=>$lab,
                "sumberDana"=>$sumberDana,
                "barang"=>$barang
            ]);
        }else if ($request->peruntukan == "dosen"){
            $dosen = Dosen::all();
            return view('inventaris.tambahDosen',[
                "data" => $request->except('peruntukan'),
                "dosen"=>$dosen,
                "sumberDana"=>$sumberDana,
                "barang"=>$barang
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventaris=Inventaris::create($request->except(['barang','sumber_dana','dosen','lab']));
        $barang=Barang::find($request->barang);
        $sumberDana=SumberDana::find($request->sumber_dana);
        $inventaris->barang()->associate($barang);
        $inventaris->sumberDana()->associate($sumberDana);
        if ($request->has('dosen')) {
            $dosen=Dosen::find($request->dosen);
            $inventaris->peruntukan()->associate($dosen);
        } else {
            $lab=Lab::find($request->lab);
            $inventaris->peruntukan()->associate($lab);
        }
        $inventaris->save();
        return redirect()->route('inventaris.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
        //
    }
}
