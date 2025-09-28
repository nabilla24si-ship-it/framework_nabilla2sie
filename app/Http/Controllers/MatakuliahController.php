<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController
{
    // Menampilkan semua data matakuliah
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       //
    }

    // Menampilkan detail matakuliah berdasarkan kode
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah: " . $kode;
        }
        return "Masukkan kode matakuliah!";
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

