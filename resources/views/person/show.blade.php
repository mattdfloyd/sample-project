@extends('layouts.app')

@section('body')

<div class="max-w-md mx-auto py-4">
    <h2>{{ $person->full_name }}</h2>
    <div class="bg-white shadow-md rounded px-8 py-6 my-4">
        <pre id="json">{!! var_dump($person->toArray()) !!}</pre>
        <script>
            document.getElementById("json").innerHTML = JSON.stringify(@json($person), undefined, 2);
        </script>

        <div class="mt-4">
            <a href="{{ action('PersonController@create') }}" class="text-blue-dark no-underline hover:underline">Create A New Person</a>
        </div>
    </div>
</div>

@endsection
