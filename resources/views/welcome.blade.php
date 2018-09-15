@extends('layouts.app')

@section('body')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded px-8 py-6 my-4 w-full max-w-md">
            <div class="text-center">
                <h1 class="text-5xl text-indigo font-sans">Greetings.</h1>
                <div class="mt-4 text-xl">
                    <a href="{{ action('PersonController@create') }}" class="text-blue-dark no-underline hover:underline">Create A New Person</a>
                </div>
            </div>
        </div>
    </div>
@endsection
