<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hospital;
use App\Models\BloodRequest;

class HospitalListController extends Controller
{
    public function penerima()
    {
        $data = Hospital::get();
        return view('penerima',compact('data'));
    }

    public function pendonor()
    {
        $data = Hospital::get();
        return view('pendonor',compact('data'));
    }

    public function create()
    {
        return view('bloodRequest');
    }

    public function store()
    {

        $data = new BloodRequest();
        $data->NIK = request('NIK','');
        $data->nama = request('nama','');
        $data->penyakit = request('penyakit','');
        $data->golonganDarah = request('golonganDarah','');
        $data->tinggiBadan = request('tinggiBadan',0);
        $data->beratBadan = request('beratBadan',0);

        $data->save();

        return redirect('/notification');
    }

    public function notification()
    {
        return view('notification');
    }
}
