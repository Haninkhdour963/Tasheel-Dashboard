<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the list of all contacts
    public function index()
    {
        $contacts = Contact::with('jobPosting', 'client', 'technician')->get(); // Eager load related data
        return view('admin.contact.index', compact('contacts'));
    }

    // Store a new contact
    public function store(ContactFormRequest $request)
    {
        $contact = Contact::create($request->validated());
        return redirect()->route('admin.contacts.index')->with('success', 'Contact message sent successfully');
    }
}
