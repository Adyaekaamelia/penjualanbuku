<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::with('supplier')->get();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $supplier = Supplier::all();
        return view('buku.create', compact('supplier'));
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
            'supplier_id' => 'required',
            'title' => 'required|unique:bukus',
            'jenis' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $buku = new Buku;
        $buku->title = $request->title;
        $buku->supplier_id = $request->supplier_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/buku/', $name);
            $buku->cover = $name;
        }
        $buku->stok = $request->stok;
        $buku->jenis = $request->jenis;
        $buku->harga = $request->harga;
        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $supplier = Supplier::all();
        return view('buku.show', compact('buku', 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $buku = Buku::findOrFail($id);
        $supplier = Supplier::all();
        return view('buku.edit', compact('buku', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required',
            'title' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            // 'cover' => 'required|image|max:2048',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->title = $request->title;
        $buku->supplier_id = $request->supplier_id;
        $buku->stok = $request->stok;
        $buku->jenis = $request->jenis;
        $buku->harga = $request->harga;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/buku/', $name);
            $buku->cover = $name;
        }

        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $buku = Buku::findOrFail($id);
        $buku->deleteImage();
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
