<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }
 
    public function store(Request $request)
    {
        Pengumuman::create($request->except(['token']));
        return redirect('/pengumuman');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update($id, Request $request)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->update($request->except(['token']));
        return redirect('/pengumuman');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/pengumuman');
    }

    
}
