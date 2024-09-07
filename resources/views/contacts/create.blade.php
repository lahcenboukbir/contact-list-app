@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a contact</h1>

        <!-- Form for creating a new contact -->
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <!-- Input for contact name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="John Doe">
            </div>

            <!-- Input for phone number -->
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone number</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number"
                    placeholder="06 12 34 56 78">
            </div>

            <!-- Input for email address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>

            <!-- Textarea for address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" class="form-control" id="address" rows="3" placeholder="1234 Main St"></textarea>
            </div>

            <!-- Submit button and back link -->
            <div class="col-12">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fa-solid fa-backward"></i> Back
                </a>
                <button class="btn btn-secondary" type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
