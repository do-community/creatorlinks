<table class="table-fixed w-full">
    <thead>
    <tr>
        <th class="w-1/3 px-4 py-2">URL</th>
        <th class="w-1/3 px-4 py-2">Description</th>
        <th class="w-1/4 px-4 py-2">Clicks</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($links as $link)
    <tr>
        <td class="border px-4 py-2">{{ $link->url }}</td>
        <td class="border px-4 py-2">{{ $link->description }}</td>
        <td class="border px-4 py-2">858</td>
    </tr>
    @endforeach
    </tbody>
</table>
