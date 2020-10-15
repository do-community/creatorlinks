@extends('layouts.main')

@section('content')
    <div class="w-full items-center">
        <div class="text-gray-700 text-center p-3 mt-6 rounded-md">
            <div class="flex flex-row">
                <div class="m-5 px-4 py-2">
                    <img class="img-thumbnail w-20 h-20 rounded-full" src="http://localhost:8000/images/nKa2EnjhYPITJBBbvj1qVLRqZwBr5DJKTmUpGqvh.png" title="Link thumb">
                </div>

                <div class="m-5 py-2">
                    <h1>{{ $user->name }}</h1>
                    <p>Check out {{ $user->username }}'s awesome links!</p>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('user-page.links', ['user' => $user])
        </div>
    </div>
@endsection
