<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'nullable|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        Service::create($validated);
        return redirect()->route('services.index')->with('success', 'Servicio creado.');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'icon' => 'nullable|string|max:100',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $service->update($validated);
        return redirect()->route('services.index')->with('success', 'Servicio actualizado.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Servicio eliminado.');
    }
}