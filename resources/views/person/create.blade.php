@extends('layouts.app')

@section('body')

<div class="max-w-md mx-auto py-4">
    <h2>Create Person</h2>
    <div class="bg-white shadow-md rounded px-8 py-6 my-4">
        <form action="{{ action('PersonController@store') }}" method="POST" id="form">
            @csrf
            <div class="mb-4">
                <label for="first_name" class="inline-block mb-2">First Name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="last_name" class="inline-block mb-2">Last Name</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="title" class="inline-block mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="age" class="inline-block mb-2">Age</label>
                <input type="number" name="age" value="{{ old('age') }}" id="age" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="street" class="inline-block mb-2">Street</label>
                <input type="text" name="street" value="{{ old('street') }}" id="street" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="city" class="inline-block mb-2">City</label>
                <input type="text" name="city" value="{{ old('city') }}" id="city" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="state" class="inline-block mb-2">State</label>
                <input type="text" name="state" value="{{ old('state') }}" id="state" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="zip" class="inline-block mb-2">Zip</label>
                <input type="text" name="zip" value="{{ old('zip') }}" id="zip" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="email" class="inline-block mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="phone" class="inline-block mb-2">Phone Number</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" id="phone" class="form-control" required maxlength="255">
            </div>

            <div class="mb-4">
                <label for="password" class="inline-block mb-2">Password</label>
                <input type="password" name="password" v id="password" class="form-control" required minlength="6">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="inline-block mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required minlength="6">
            </div>

            <div class="mb-4">
                {!! NoCaptcha::display() !!}
            </div>

            <button type="submit" class="inline-block font-normal text-center whitespace-no-wrap align-middle select-none leading-normal px-3 py-1 text-base bg-blue border-blue hover:bg-blue-dark hover:border-blue-darker text-white border rounded">Submit</button>
        </form>
    </div>
</div>

@endsection
