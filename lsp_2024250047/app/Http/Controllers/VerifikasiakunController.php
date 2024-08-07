<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class VerifikasiakunController extends Controller
{
    public function index()
    {
        // Retrieve all Daftarmahasiswa records
        $user = User::all();
        // Pass the data to the view
        return view('admin.verifikasi_akun', compact('user'));
    }

    public function validationAdmin(Request $request,string $id)
    {
        $update = User::find($id);
        // $this->authorize('validationAdmin',[User::class,$update]);
        $update->status = $request->validatorAdmin;
        $update->save();
        return redirect()->back();
    }

    
}
