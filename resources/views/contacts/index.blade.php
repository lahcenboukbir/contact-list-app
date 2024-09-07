@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Home</h1>

        <!-- Table displaying the list of contacts -->
        <table class="table table-hover caption-top mt-3 text-center">
            <caption>List of users</caption>

            <thead>
                <tr class="table-dark">
                    <!-- Table headers -->
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <!-- Loop through each contact and display their details -->
                @foreach ($contacts as $contact)
                    <tr class="align-middle">
                        <!-- Display contact ID -->
                        <th scope="row">{{ $contact->id }}</th>
                        <!-- Display contact name, with 'N/A' if empty -->
                        <td>{{ $contact->name ? $contact->name : 'N/A' }}</td>
                        <!-- Display contact phone number, with 'N/A' if empty -->
                        <td>{{ $contact->phone_number ? $contact->phone_number : 'N/A' }}</td>
                        <!-- Display contact email, with 'N/A' if empty -->
                        <td>{{ $contact->email ? $contact->email : 'N/A' }}</td>
                        <!-- Display contact address, with 'N/A' if empty -->
                        <td>{{ $contact->address ? $contact->address : 'N/A' }}</td>
                        <td>
                            <!-- View contact details -->
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-secondary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <!-- Edit contact details -->
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Delete contact -->
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <!-- Button to create a new contact -->
        <a href="{{ route('contacts.create') }}" type="button" class="btn btn-secondary mt-3">
            <i class="fa-solid fa-plus"></i> Create a new contact
        </a>
    </div>
@endsection
