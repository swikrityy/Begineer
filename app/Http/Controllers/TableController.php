<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas= Table::get();
        // dd($datas);
        return view('table', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // //    dd($request->all());
    //    Table::create([
    //     'name' => $request->name,
    //     'age'=> $request->age,
    //     'country'=>$request->country
    //    ]);
    Table::create($request->all());
    return redirect('/table');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Table::find($id);
        dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
