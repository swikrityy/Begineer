<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'paragraph' => 'required',
        ]);

        Service::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'paragraph' => 'required',
        ]);

        $service->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index');
    }
}