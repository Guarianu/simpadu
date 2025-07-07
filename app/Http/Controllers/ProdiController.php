<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ['nama' => "Irfan", 'foto' => 'avatar.png'];
        $prodi = prodi::all();
        return view('prodi.index', compact ('data', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data = ['nama' => "Irfan", 'foto' => 'avatar.png'];
        return view('prodi.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            
            [
                'nama' => 'required|string|max:100',
                'kaprodi' => 'required|string|max:150',
                'jurusan' => 'required|string|max:100',
                

            ]);
           
       prodi::create($validateData);

       return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambahkan');
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
    public function edit($id)
    {
        $data = ['nama' => "Irfan", 'foto' => 'avatar.png'];
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('data','prodi'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
         $validateData = $request->validate(
            
            [
                'nama' => 'required|string|max:100',
                'kaprodi' => 'required|string|max:150',
                'jurusan' => 'required|string|max:100',
            ]);
           
         
        $prodi = Prodi::findOrFail($id);
        $prodi->update($validateData);

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil dihapus');
    }
}
