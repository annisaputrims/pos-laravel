<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $level = Level::all();
        // dd($level);
        return view('level.index', compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('level.tambah-level');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'level_name' => 'required'
        ]);
        Level::create($val);
        return redirect()->route('level.index');
        toast('Data Berhasil Ditambahkan', 'success');
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
        $level = Level::find($id);
        return view('level.edit-level', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $level = Level::find($id);
        $val = $request->validate([
            'level_name' => 'required'
        ]);
        $level->update($val);
        return redirect()->route('level.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $level = Level::find($id);
        $level->delete();
        alert('Are you sure you want to delete?');
        return redirect()->route('level.index')->with('success', 'Data Berhasil Dihapus');

    }
}
