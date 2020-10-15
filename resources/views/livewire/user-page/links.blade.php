    @foreach ($links as $link)
    <div class="text-gray-700 text-center bg-gray-100 p-3 mt-6 rounded-md">
        <div class="flex flex-row">
            <div class="m-5 px-4 py-2">
                <img class="img-thumbnail w-20 h-20 rounded-full" src="/{{ $link->thumbnail }}" title="Link thumb">
            </div>

            <div class="m-5 py-2">
                <button wire:click="addClick({{ $link->id }})">
                    <a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a>
                </button>
            </div>
        </div>

    </div>
    @endforeach



