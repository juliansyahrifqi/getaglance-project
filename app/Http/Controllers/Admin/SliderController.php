<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.slider.index', [
            'sliders' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.slider.create');
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
            'title' => 'max:255',
            'description' => 'max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/slider', 'public');

        Slider::create($data);

        return redirect()->route('slider.index')->with('success', 'Slider berhasil ditambahkan!');
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
        return view('pages.admin.slider.edit', [
            'slider' => Slider::findOrFail($id)
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
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title' => 'max:255',
            'description' => 'max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:512'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/slider', 'public');
            File::delete($slider->image);
        }

        try {
            $slider->update($data);

            return redirect()->route('slider.index')->with('success', 'Slider berhasil diubah!');
        } catch(\Exception $e) {
            return redirect()->route('slider.index')->with('errors', 'Slider gagal diubah!');
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
        $slider = Slider::findOrFail($id);

        if($slider->delete()) {
            Storage::delete($slider->image);

            return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus!');
        }
    }
}
