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
        dd($request->all());
        Employee::create($request->all());
    }
}
