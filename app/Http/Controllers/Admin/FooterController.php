<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $footers = Footer::all();
        return view('admin.footers.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.footers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Footer::create($request->only(['title', 'description']));
        return redirect()->route('admin.footers.index')->with('success', 'Footer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('admin.footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $footer->update($request->only(['title', 'description']));
        return redirect()->route('admin.footers.index')->with('success', 'Footer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $footer->delete();
        return redirect()->route('admin.footers.index')->with('success', 'Footer deleted successfully!');
    }
}
