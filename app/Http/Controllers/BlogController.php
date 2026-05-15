<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $datas= Blog::get();
        // dd($datas);
        return view('admin.blogs.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create($request->all());
    return redirect('/blogtable');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Blog::find($id);
        return view('blogshow', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userdata = Blog::find($id);
        return view('blogedit', compact('userdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table= Blog::find($id);
        $table->update([
        // 'name'=>$request->name
        ]);
        $table->update($request->all());
        return redirect ()->route('blogtable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete= Blog::find($id);
        $delete->delete();

        return redirect ()->route('blogtable');
    }
}
