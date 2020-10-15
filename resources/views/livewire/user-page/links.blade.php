<table class="table-auto w-full">
    <thead>
    <tr>
        <th class="w-20 px-4 py-2">Icon</th>
        <th class="px-4 py-2">Link</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($links as $link)
        <tr @if($loop->even)class="bg-grey"@endif>
            <td class="border px-4 py-2"><img class="img-thumbnail w-20" src="/{{ $link->thumbnail }}" title="Link thumb"></td>
            <td class="border px-4 py-2"><a wire:click href="{{ $link->url }}" target="_blank" title="Open Link in New Page: {{ $link->url }}">{{ $link->description }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
