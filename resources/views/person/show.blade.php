@extends('layouts.app')

@section('body')

<div class="max-w-md mx-auto">
    <div class="bg-white shadow-md rounded px-8 py-6 my-4">
        <pre id="json">{!! var_dump($person->toArray()) !!}</pre>
        <script>
            document.getElementById("json").innerHTML = JSON.stringify(@json($person), undefined, 2);
        </script>
    </div>
</div>

@endsection
