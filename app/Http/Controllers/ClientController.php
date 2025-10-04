<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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
        ]);

        Client::create([
            'user_id' => auth()->id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'inicio_tramite' => $request->inicio_tramite,
            'tipo_tramite' => $request->tipo_tramite,
            'destino' => $request->destino,
            'costo' => $request->costo,
            'numero_contrato' => $request->numero_contrato,
            'notes' => $request->notes,
        ]);

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
        ]);

        $client->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'inicio_tramite' => $request->inicio_tramite,
            'tipo_tramite' => $request->tipo_tramite,
            'destino' => $request->destino,
            'costo' => $request->costo,
            'numero_contrato' => $request->numero_contrato,
            'notes' => $request->notes,
        ]);

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado.');
    }

    public function destroy(Client $client)
    {
        if (auth()->user()->isAdmin()) {
            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Cliente eliminado.');
        }
        return redirect()->route('clients.index')->with('error', 'No tienes permiso.');
    }
}