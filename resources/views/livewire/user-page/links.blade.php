<div class="flex flex-col bg-gray-200">
    @foreach ($links as $link)
    <div class="text-gray-700 text-center bg-gray-400 mb-5">
        <div class="flex flex-row">
            <div class="m-5 px-4 py-2">
                <img class="img-thumbnail w-20" src="/{{ $link->thumbnail }}" title="Link thumb">
            </div>

            <div class="m-5 py-2">
                <button wire:click="addClick({{ $link->id }})">
                    <a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a>
                </button>
            </div>
        </div>

    </div>
    @endforeach
</div>


