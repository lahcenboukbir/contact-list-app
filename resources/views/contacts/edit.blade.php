@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page heading displaying the contact's name -->
        <h1>{{ $contact->name }}</h1>

        <!-- Form for updating contact details -->
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')

            <!-- Input for contact name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}">
            </div>

            <!-- Input for phone number -->
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $contact->phone_number }}">
            </div>

            <!-- Input for email address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
            </div>

            <!-- Textarea for address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ $contact->address }}</textarea>
            </div>

            <!-- Navigation and submission buttons -->
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa-solid fa-backward"></i> Back
            </a>
            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    </div>
@endsection
