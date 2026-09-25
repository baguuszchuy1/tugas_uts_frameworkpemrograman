<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $kendaraans = Kendaraan::when($search, function ($query, $search) {
                $query->where('nama_pemilik', 'like', "%{$search}%")
                    ->orWhere('no_polisi', 'like', "%{$search}%")
                    ->orWhere('merk', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('kendaraan.index', compact('kendaraans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'jenis' => 'required|in:Motor,Mobil',
            'merk' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20|unique:kendaraans,no_polisi',
            'warna' => 'nullable|string|max:50',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'jenis' => 'required|in:Motor,Mobil',
            'merk' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20|unique:kendaraans,no_polisi,' . $kendaraan->id,
            'warna' => 'nullable|string|max:50',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus.');
    }
}
