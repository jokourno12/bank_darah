<?php

namespace App\Http\Controllers;

use App\Models\DonorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function donor($id)
    {
        $data = DB::table('hospitals')
        ->where('id',$id)
        ->get();
        return view('Donor/donor',compact('data'));
    }

    public function donorform(Request $request)
    {

        $user = Auth::user();
        $data = new DonorRequest();
        $data->user_id = $user->id;
        $data->hospital_id = $request->id;
        $data->golonganDarah = request('golonganDarah','');
        $data->tanggal = request('tanggal');


        $data->save();

        return redirect('/notification');
    }
}
