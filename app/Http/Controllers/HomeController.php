<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();

        return view('admin.home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('home', 'public');

            $data['image'] = $path;
        }

        Home::create($data);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {

            if ($home->image) {

                Storage::disk('public')->delete($home->image);
            }

            $path = $request->file('image')->store('home', 'public');

            $data['image'] = $path;
        }

        $home->update($data);

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        if ($home->image) {

            Storage::disk('public')->delete($home->image);
        }

        $home->delete();

        return redirect()->route('home.index');
    }
}