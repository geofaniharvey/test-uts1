<?php

namespace App\Http\Controllers;

use App\Models\Profils;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{

    public function index()
    {
        $profils = Profils::orderby('id', 'desc')->paginate(3);

        return view('profils.index', compact('profils'));
    }
    public function create()
    {
        return view('profils.create');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'namatoko' => 'required|unique:profils|max:255|',
            'alamat' => 'required',
            'kota' => 'required'
        ]);

        $profils = new Profils;

        $profils->namatoko = $request->namatoko;
        $profils->alamat = $request->alamat;
        $profils->kota = $request->kota;

        $profils->save();

        return redirect('/');
    }

    public function show($id)
    {
        $profil = Profils::where('id', $id)->first();
       
        return view('profils.show', ['profil' => $profil]);
    }

    public function edit($id)
    {
        $profil = Profils::where('id', $id)->first();
       
        return view('profils.edit', ['profil' => $profil]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namatoko' => 'required|unique:profils|max:255|',
            'alamat' => 'required',
            'kota' => 'required'
        ]);

        Profils::find($id)->update([
            'namatoko' => $request->namatoko,
            'alamat' => $request->alamat,
            'kota' => $request->kota
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Profils::find($id)->delete();
        return redirect('/');
    }
}