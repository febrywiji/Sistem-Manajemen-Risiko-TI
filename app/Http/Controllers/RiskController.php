<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $risks = Risk::all();
        return view('adminHome', compact('risks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('risks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $risks = new Risk();
        $risks->title = $request->title;
        $risks->description = $request->description;
        $risks->severity = $request->severity;
        $risks->occurrence = $request->occurrence;
        $risks->detection = $request->detection;
        $risks->status = $request->status;
        $risks->risk_priority_number = $request->risk_priority_number;
        $risks->save();

        return redirect()->route('adminHome')->with('success', 'Risk created successfully.');
    }

    public function statusOptions() {
        return [
            '1' => 'Risk',
            '2' => 'Risks Correction',
            '3' => 'Risk Resolved',
            '4' => 'Residual Risk',
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari data risiko berdasarkan ID
        $risk = Risk::findOrFail($id);

        // Kirim data ke view
        return view('risks.show', compact('risk'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $risk = Risk::findOrFail($id); // Ambil data berdasarkan ID
        return view('risks.edit', compact('risk')); // Kirim data ke view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $risk = Risk::findOrFail($id);

        $risk->update([
            'title' => $request->title,
            'description' => $request->description,
            'severity' => $request->severity,
            'occurrence' => $request->occurrence, // Pastikan ini sesuai dengan nama field
            'detection' => $request->detection,
            'status' => $request->status,
        ]);

        return redirect()->route('adminHome')->with('success', 'Risk updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Risk $risk)
    {
        $risk->delete();
        return redirect()->route('adminHome'/*ganti nanti dengan adminHome*/)->with('success', 'Risk deleted successfully.');
    }
}
