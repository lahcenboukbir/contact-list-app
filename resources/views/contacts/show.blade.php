@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Display the contact's name as the page heading -->
        <h1>{{ $contact->name }}</h1>

        <!-- Table displaying detailed information about the contact -->
        <table class="table mt-3">
            <!-- Table row for contact ID -->
            <tr>
                <th>#</th>
                <td>{{ $contact->id }}</td>
            </tr>
            <!-- Table row for contact name -->
            <tr>
                <th>Name</th>
                <td>{{ $contact->name }}</td>
            </tr>
            <!-- Table row for phone number, shows 'N/A' if empty -->
            <tr>
                <th>Phone number</th>
                <td>{{ $contact->phone_number ? $contact->phone_number : 'N/A' }}</td>
            </tr>
            <!-- Table row for email, shows 'N/A' if empty -->
            <tr>
                <th>Email</th>
                <td>{{ $contact->email ? $contact->email : 'N/A' }}</td>
            </tr>
            <!-- Table row for address, shows 'N/A' if empty -->
            <tr>
                <th>Address</th>
                <td>{{ $contact->address ? $contact->address : 'N/A' }}</td>
            </tr>
        </table>

        <!-- Action buttons for navigating back, editing, and deleting the contact -->
        <div class="d-flex">
            <!-- Back button to return to the previous page -->
            <a href="{{ url()->previous() }}" class="me-3 btn btn-secondary">
                <i class="fa-solid fa-backward"></i> Back
            </a>

            <!-- Edit button to navigate to the edit page for the contact -->
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success me-3">
                <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>

            <!-- Delete form with a button to delete the contact -->
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash-can"></i> Delete
                </button>
            </form>
        </div>
    </div>
@endsection
