<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    public function index()
    {
        return view('pemerintah.index');
    }
    
    public function programList()
    {
        return view('pemerintah.program-list');
    }
    
    public function storeProgram(Request $request)
    {
        // Validasi dan logika penyimpanan program
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'opd' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        
        // Simpan ke database atau lakukan operasi lainnya
        
        return back()->with('success', 'Program berhasil diposting!');
    }
    
    public function storeSolution(Request $request)
    {
        // Validasi dan logika penyimpanan solusi
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        
        // Simpan ke database atau lakukan operasi lainnya
        
        return back()->with('success', 'Solusi berhasil dikirim!');
    }
}