<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|unique:clients,email',
            'phone2' => 'nullable|string|max:20',
            'birth_date' => 'nullable|date',
            'inicio_tramite' => 'nullable|date',
            'costo' => 'nullable|numeric',
            'pdf' => 'nullable|file|mimes:pdf|max:10240', // máximo 10MB
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('pdfs', 'public');
        }

        Client::create($data);

        return redirect()->route('clients.index')->with('success', 'Cliente creado.');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|unique:clients,email,' . $client->id,
            'phone2' => 'nullable|string|max:20',
            'birth_date' => 'nullable|date',
            'inicio_tramite' => 'nullable|date',
            'costo' => 'nullable|numeric',
            'pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('pdf')) {
            // Eliminar PDF anterior si existe
            if ($client->pdf && Storage::disk('public')->exists($client->pdf)) {
                Storage::disk('public')->delete($client->pdf);
            }
            $data['pdf'] = $request->file('pdf')->store('pdfs', 'public');
        }

        $client->update($data);

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado.');
    }

    public function destroy(Client $client)
    {
        if (auth()->user()->isAdmin()) {
            // Eliminar PDF si existe
            if ($client->pdf && Storage::disk('public')->exists($client->pdf)) {
                Storage::disk('public')->delete($client->pdf);
            }

            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Cliente eliminado.');
        }
        return redirect()->route('clients.index')->with('error', 'No tienes permiso.');
    }
}
