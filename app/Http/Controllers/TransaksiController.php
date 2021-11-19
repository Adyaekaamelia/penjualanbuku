<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Transaksi;

class TransaksiController extends Controller
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
        $transaksis = Transaksi::with('buku')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        return view('transaksi.create', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required|unique:bukus',
            // 'jenis' => 'required',
            // 'jumlah' => 'required',
            // 'total_harga' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->buku_id = $request->buku_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        return view('transaksi.show', compact('transaksi', 'buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        return view('transaksi.edit', compact('transaksi', 'buku'));


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
        $request->validate([
            // 'title' => 'required|unique:bukus',
            // 'jenis' => 'required',
            // 'jumlah' => 'required',
            // 'total_harga' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->buku_id = $request->buku_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
