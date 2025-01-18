<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function adminHome()
    {
        $data = DB::table('hospitals')->get();
        return view('adminView/adminHome',compact('data'));
    }

    public function edit($id)
    {
        $data = DB::table('hospitals')
        ->where('id',$id)
        ->get();
        return view('adminView/edit',compact('data'));
    }

    public function editform(Request $request)
    {
        DB::table('hospitals')
        ->where('id',$request->id)
        ->update([
            'stokA' => $request->stokA,
            'stokB' => $request->stokB,
            'stokAB' => $request->stokAB,
            'stokO' => $request->stokO,
        ]);
        return redirect('/adminHome');
    }
}
