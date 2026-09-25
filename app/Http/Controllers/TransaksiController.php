<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $transaksis = Transaksi::when($search, function ($query, $search) {
                $query->where('nama_pelanggan', 'like', "%{$search}%")
                    ->orWhere('no_polisi', 'like', "%{$search}%")
                    ->orWhere('nama_layanan', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('transaksi.index', compact('transaksis', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20',
            'nama_layanan' => 'required|string|max:255',
            'total_bayar' => 'required|numeric|min:0',
            'tanggal_transaksi' => 'required|date',
            'status' => 'required|in:Menunggu,Proses,Selesai',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20',
            'nama_layanan' => 'required|string|max:255',
            'total_bayar' => 'required|numeric|min:0',
            'tanggal_transaksi' => 'required|date',
            'status' => 'required|in:Menunggu,Proses,Selesai',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
    }
}
