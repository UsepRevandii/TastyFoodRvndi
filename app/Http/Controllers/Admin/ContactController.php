<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        // Admin wajib login, user boleh store
        $this->middleware('auth')->except('store');
    }

    /**
     * USER: Simpan pesan kontak
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Pesan berhasil dikirim.');
    }

    /**
     * ADMIN: List pesan
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * ADMIN: Hapus pesan
     */
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();
        return back();
    }
}