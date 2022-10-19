<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TalentSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TalentSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.talent-section.index', [
            'talentSection' => TalentSection::findOrFail(1)
        ]);
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
        $talentSection = TalentSection::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/slider', 'public');
            File::delete($talentSection->image);
        }

        try {
            $talentSection->update($data);

            return redirect()->route('talent-section.index')->with('success', 'Talent berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('talent-section.index')->with('errors', 'Talent gagal diubah!');
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
        //
    }
}
