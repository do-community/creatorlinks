<table class="table-auto w-full">
    <thead>
    <tr>
        <th class="w-20 px-4 py-2">Icon</th>
        <th class="px-4 py-2">Link</th>
        <th class="px-4 py-2">Clicks</th>
        <th class="px-4 py-2">Status</th>
        <th class="px-4 py-2">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($links as $link)
    <tr @if($loop->even)class="bg-grey"@endif>
        <td class="border px-4 py-2"><img class="img-thumbnail w-20" src="/{{ $link->thumbnail }}" title="Link thumb"></td>
        <td class="border px-4 py-2"><a href="{{ $link->url }}" target="_blank" title="Open Link in New Page: {{ $link->url }}">{{ $link->description }}</a></td>
        <td class="border px-4 py-2">{{ $link->clicks }}</td>
        <td class="border px-4 py-2">
            @if($link->enabled)
                Enabled
            @else
                Disabled
            @endif
        </td>
        <td class="border px-4 py-2">
            @if($link->enabled)
                <button wire:click="disable({{ $link->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                    Disable Link
                </button>
            @else
                <button wire:click="enable({{ $link->id }})" class="bg-gray-800 text-white px-6 rounded-full">
                    Enable Link
                </button>
            @endif

            <button wire:click="delete({{ $link->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                Delete Permanently
            </button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
