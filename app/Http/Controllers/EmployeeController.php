<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('datapegawai', compact('data'));
    }

    public function tambahpegawai()
    {
        return view('tambahpegawai');
    }

    public function insertpegawai(Request $request)
    {
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data berhasil ditambahkan!');
    }

    public function tampilkanpegawai($id)
    {
        $data = Employee::find($id);
        // dd($data);
        return view('tampilkanpegawai', compact('data'));
    }

    public function updatepegawai(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('pegawai')->with('success', 'Data berhasil diupdate!');
    }
}
