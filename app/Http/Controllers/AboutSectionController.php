<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('about-sections.index', compact('aboutSections'));
    }

    public function create()
    {
        return view('about-sections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image_1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('main_image')) {
            $validated['main_image'] = $request->file('main_image')->store('about', 'public');
        }
        if ($request->hasFile('image_1')) {
            $validated['image_1'] = $request->file('image_1')->store('about', 'public');
        }
        if ($request->hasFile('image_2')) {
            $validated['image_2'] = $request->file('image_2')->store('about', 'public');
        }

        AboutSection::create($validated);
        return redirect()->route('about-sections.index')->with('success', 'Sección creada.');
    }

    public function edit(AboutSection $aboutSection)
    {
        return view('about-sections.edit', compact('aboutSection'));
    }

    public function update(Request $request, AboutSection $aboutSection)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('main_image')) {
            if ($aboutSection->main_image) {
                Storage::disk('public')->delete($aboutSection->main_image);
            }
            $validated['main_image'] = $request->file('main_image')->store('about', 'public');
        }
        if ($request->hasFile('image_1')) {
            if ($aboutSection->image_1) {
                Storage::disk('public')->delete($aboutSection->image_1);
            }
            $validated['image_1'] = $request->file('image_1')->store('about', 'public');
        }
        if ($request->hasFile('image_2')) {
            if ($aboutSection->image_2) {
                Storage::disk('public')->delete($aboutSection->image_2);
            }
            $validated['image_2'] = $request->file('image_2')->store('about', 'public');
        }

        $aboutSection->update($validated);
        return redirect()->route('about-sections.index')->with('success', 'Sección actualizada.');
    }

    public function destroy(AboutSection $aboutSection)
    {
        if ($aboutSection->main_image) {
            Storage::disk('public')->delete($aboutSection->main_image);
        }
        if ($aboutSection->image_1) {
            Storage::disk('public')->delete($aboutSection->image_1);
        }
        if ($aboutSection->image_2) {
            Storage::disk('public')->delete($aboutSection->image_2);
        }
        $aboutSection->delete();
        return redirect()->route('about-sections.index')->with('success', 'Sección eliminada.');
    }
}