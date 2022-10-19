<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.kategori.index', [
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kategori.create');
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
            'nama_kategori' => 'max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/kategori', 'public');
        $data['slug'] = Str::of($request->nama_kategori)->slug('-');

        Kategori::create($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
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
        return view('pages.admin.kategori.edit', [
            'category' => Kategori::findOrFail($id)
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
        $kategori = Kategori::findOrFail($id);

        $request->validate([
            'nama_kategori' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/kategori', 'public');
            File::delete($kategori->image);
        }

        $kategori['slug'] = Str::of($request->nama_kategori)->slug('-');

        try {
            $kategori->update($data);

            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('kategori.index')->with('errors', 'Kategori gagal diubah!');
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
        $kategori = Kategori::findOrFail($id);

        if($kategori->delete()) {
            Storage::delete($kategori->image);

            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
        }
    }
}
