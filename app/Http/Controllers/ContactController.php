<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'nullable',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('contacts', 'public');
        }

        Contact::create($data);

        return redirect()->route('contact.index')->with('success', 'Contact added!');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $contacts = Contact::latest()->get();

        return view('contact', compact('contact', 'contacts'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'nullable',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('_token', '_method');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('contacts', 'public');
        }

        $contact->update($data);

        return redirect()->route('contact.index')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        if ($contact->photo) {
            \Storage::disk('public')->delete($contact->photo);
        }

        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact deleted.');
    }
}
