<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));

    }


    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->all();
       $path = $request->file('image')->store('gallery', 'public');

    $validate['image'] = $path;

    Gallery::create($validate);

    return redirect('/gallery');
}
    


    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
       
        $data=$request->all();
       

        if ($request->hasFile('image')){
            if ($gallery->image){
                Storage::disk('public')->delete($gallery->image);

            }
            $path =$request->file('image')->store('images','public');
            $data['image']=$path;

        }
        $gallery->update($data);

        return redirect ()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
       
          if ($gallery->image){
    
                Storage::disk('public')->delete($gallery->image);

            }
             $gallery->delete();

        return redirect()->route('gallery.index');
}
}