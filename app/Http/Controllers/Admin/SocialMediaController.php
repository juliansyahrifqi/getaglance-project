<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.social-media.index', [
            'socials' => SocialMedia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.social-media.create');
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
            'name' => 'required|max:255|unique:social_media',
            'account_name' => 'required|max:255',
            'icon' => 'required|mimes:jpeg,jpg,png,gif,svg|max:512'
        ]);

        $data = $request->all();

        $data['icon'] = $request->file('icon')->store('assets/sosial-media', 'public');

        SocialMedia::create($data);

        return redirect()->route('social-media.index')->with('success', 'Sosial Media berhasil ditambahkan!');
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
        return view('pages.admin.social-media.edit', [
            'social' => SocialMedia::findOrFail($id)
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
        $social = SocialMedia::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'account_name' => 'required|max:255',
            'link' => 'required|max:255',
            'icon' => 'mimes:jpeg,jpg,png,gif,svg|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/kategori', 'public');
            File::delete($social->image);
        }

        try {
            $social->update($data);

            return redirect()->route('social-media.index')->with('success', 'Sosial Media berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('social-media.index')->with('errors', 'Sosial Media gagal diubah!');
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
        $social = SocialMedia::findOrFail($id);

        if($social->delete()) {
            Storage::delete($social->icon);

            return redirect()->route('social-media.index')->with('success', 'Sosial Media berhasil dihapus!');
        }
    }
}
