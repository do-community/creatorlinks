@extends('layouts.main')

@section('content')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $user->name }} {{$user->id}}
    </h2>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('user-page.links', ['user' => $user])
        </div>

    </div>
@endsection
