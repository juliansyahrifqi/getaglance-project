<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.talent.index', [
            'talents' => Talent::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.talent.create');
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
            'instagram' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/talent', 'public');

        Talent::create($data);

        return redirect()->route('talent.index')->with('success', 'Talent berhasil ditambahkan!');
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
        $talent = Talent::findOrFail($id);

        return view('pages.admin.talent.edit', [
            'talent' => $talent
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
        $talent = Talent::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'instagram' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/talent', 'public');
            File::delete($talent->image);
        }

        try {
            $talent->update($data);

            return redirect()->route('talent.index')->with('success', 'Talent berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('talent.index')->with('errors', 'Talent gagal diubah!');
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
        $talent = Talent::findOrFail($id);

        if($talent->delete()) {
            Storage::delete($talent->image);

            return redirect()->route('talent.index')->with('success', 'Talent berhasil dihapus!');
        }
    }
}
