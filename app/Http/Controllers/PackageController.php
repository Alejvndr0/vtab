<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('order')->get();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:100',
            'persons' => 'nullable|string|max:100',
            'rating' => 'nullable|numeric|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('packages', 'public');
        }

        Package::create($validated);
        return redirect()->route('packages.index')->with('success', 'Paquete creado.');
    }

    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:100',
            'persons' => 'nullable|string|max:100',
            'rating' => 'nullable|numeric|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($package->image) {
                Storage::disk('public')->delete($package->image);
            }
            $validated['image'] = $request->file('image')->store('packages', 'public');
        }

        $package->update($validated);
        return redirect()->route('packages.index')->with('success', 'Paquete actualizado.');
    }

    public function destroy(Package $package)
    {
        if ($package->image) {
            Storage::disk('public')->delete($package->image);
        }
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Paquete eliminado.');
    }
}