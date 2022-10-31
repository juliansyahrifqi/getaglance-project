<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.produk.index', [
            'products' => Produk::with('kategori')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.produk.create',[
            'categories' => Kategori::all()
        ]);
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
            'name' => 'required|max:255',
            'kategori_id' => 'required',
            'link' => 'required|max:255',
            'tiktok_link' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/produk', 'public');
    
        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
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
        return view('pages.admin.produk.edit', [
            'product' => Produk::findOrFail($id),
            'categories' => Kategori::all()
        ]);
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
        $produk = Produk::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'kategori_id' => 'required',
            'link' => 'required|max:255',
            'tiktok_link' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/produk', 'public');
            File::delete($produk->image);
        }

        try {
            $produk->update($data);

            return redirect()->route('produk.index')->with('success', 'Produk berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('produk.index')->with('errors', 'Produk gagal diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        if($produk->delete()) {
            Storage::delete($produk->image);

            return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
        }
    }
}
