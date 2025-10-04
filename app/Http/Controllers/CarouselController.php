<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::orderBy('order')->get();
        return view('carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('carousels.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('carousels', 'public');
        }

        Carousel::create($validated);
        return redirect()->route('carousels.index')->with('success', 'Carousel creado.');
    }

    public function edit(Carousel $carousel)
    {
        return view('carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($carousel->image) {
                Storage::disk('public')->delete($carousel->image);
            }
            $validated['image'] = $request->file('image')->store('carousels', 'public');
        }

        $carousel->update($validated);
        return redirect()->route('carousels.index')->with('success', 'Carousel actualizado.');
    }

    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::disk('public')->delete($carousel->image);
        }
        $carousel->delete();
        return redirect()->route('carousels.index')->with('success', 'Carousel eliminado.');
    }
}