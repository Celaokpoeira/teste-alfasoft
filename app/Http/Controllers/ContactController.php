<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 1- Listar contatos existentes
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // 2- Formulário para adicionar novos
    public function create()
    {
        return view('contacts.create');
    }

    // Salvar no banco
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.index');
    }

    // 3- Mostrar detalhes (página independente, não popup)
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // 4- Página para editar registro existente
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Atualizar no banco
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return redirect()->route('contacts.index');
    }

    // 5- Exclusão (Soft Delete nativo do Laravel)
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
