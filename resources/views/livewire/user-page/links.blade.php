@foreach ($links as $link)
    <div class="text-gray-700 bg-gray-100 p-3 mt-2 rounded-md">
        <div class="flex flex-row">
            <div class="m-5 px-2 py-4">
                <img class="img-thumbnail w-20 rounded-md" src="/{{ $link->thumbnail }}" title="Link thumb">
            </div>

            <div class="m-4 py-2 px-2 w-full text-left">
                <button wire:click="addClick({{ $link->id }})" style="text-align: left">
                    <a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a>
                </button>
                <p class="text-right"><small>link added by <strong><a href="{{ route('userpage', [ 'user' => $link->user->username ]) }}">{{ $link->user->name }}</a></strong></small></p>
            </div>
        </div>

    </div>
@endforeach




