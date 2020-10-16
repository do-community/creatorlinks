@extends('layouts.main')

@section('content')
    <div class="max-w-6xl mx-auto py-10 sm:px-4 lg:px-6">
        <div class="w-full items-center" style="text-align: center">
            <img class="img-thumbnail w-20 h-20 rounded-full justify-center" src="{{ $user->profile_photo_url }}" title="Link thumb" style="margin: 0 auto">
            <h2>{{ $user->name }}</h2>
            <p>Check out {{ $user->username }}'s awesome links!</p>
        </div>

        <div class="py-10 sm:px-4 lg:px-6">
            @livewire('user-page.links', ['user' => $user])
        </div>
    </div>
@endsection
