<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact('ads'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'position' => 'required|string|in:header,footer,sidebar', // Allowed positions
            'code' => 'required|string', // Validate the code field
        ]);
        

        Ad::create($request->all());
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad created successfully.');
    }

    public function edit(Ad $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, Ad $ad)
    {
        $request->validate([
            'title' => 'required',
            'position' => 'required',
            'code' => 'required',
        ]);

        $ad->update($request->all());
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad updated successfully.');
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad deleted successfully.');
    }
}

