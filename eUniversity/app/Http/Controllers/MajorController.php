<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::paginate(5);
        return view('majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $major = Major::create($request->all());

        return redirect()->route('majors.index', ['page' => Major::paginate(5)->lastPage()])->with('success', "Major has id $major->id created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        return view('majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $major->update($request->all());
        
        $num = ceil($major->id / 5);
        return redirect()->route( 'majors.index', ['major' => $major->id, 'page' => $num])->with('success', "Major has id $major->id updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('majors.index')->with('success', "Major has id  $major->id deleted successfully");
    }
}
