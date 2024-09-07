<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all contacts from the database
        $contacts = Contact::all();

        // Return the 'contacts.index' view, passing the contacts data
        return view('contacts.index', compact('contacts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the 'contacts.create' view to show the form for creating a new contact
        return view('contacts.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string',        // Name is required and must be a string
            'phone_number' => 'required|string', // Phone number is required and must be a string
            'email' => 'nullable|email',        // Email is optional and must be a valid email format if provided
            'address' => 'nullable|string',     // Address is optional and must be a string if provided
        ]);

        // Create a new contact with validated data
        Contact::create($validated);

        // Redirect to the contact index page
        return redirect()->route('contacts.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the contact by its ID
        $contact = Contact::find($id);

        // Return the 'contacts.show' view, passing the contact data
        return view('contacts.show', compact('contact'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the contact by its ID
        $contact = Contact::find($id);

        // Return the 'contacts.edit' view, passing the contact data for editing
        return view('contacts.edit', compact('contact'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string',        // Name is required and must be a string
            'phone_number' => 'required|string', // Phone number is required and must be a string
            'email' => 'nullable|email',        // Email is optional and must be a valid email format if provided
            'address' => 'nullable|string',     // Address is optional and must be a string if provided
        ]);

        // Update the contact with the validated data
        $id->update($validated);

        // Redirect to the contact index page
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the contact by its ID
        $contact = Contact::find($id);

        // Check if the contact exists before attempting to delete
        if ($contact) {
            $contact->delete(); // Delete the contact from the database
        }

        // Redirect back to the previous page
        return back();
    }
}
