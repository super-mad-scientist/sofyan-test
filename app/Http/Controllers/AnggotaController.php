<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggotas.index')->with(
            ['anggotas' => Anggota::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'no_hp'=> 'required|numeric|min:6,max:9',
            'email' => 'required|email|unique:anggotas',
            'address' => 'required|string',
        ]);

        Anggota::create($data);
        return redirect()->route('anggota.create')->with('success', 'Anggota added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        if(!$anggota){
            abort(404);
        }
        return view('anggotas.edit')->with([
            'anggota' => $anggota,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        if(!$anggota){
            abort(404);
        }
        $data = $request->validate([
            'name' => 'required|string',
            'no_hp'=> 'required|numeric|min:6,max:9',
            'email' => 'required|email|unique:anggotas,email,'.$id,
            'address' => 'required|string',
        ]);

        $anggota->update($data);
        return redirect()->route('anggota.edit', ['id'=>$id])->with('success', 'Anggota updated successfully!');
    }

    /**
     * Show the form for removing the specified resource.
     */
    public function delete($id)
    {
        $anggota = Anggota::find($id);
        if(!$anggota){
            abort(404);
        }
        return view('anggotas.delete')->with([
            'anggota' => $anggota,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        if(!$anggota){
            abort(404);
        }
        $anggota->delete();
        return redirect()->route('anggota.index')->with('success', 'Anggota removed successfully!');
    }
}
