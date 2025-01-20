<thead class=" bg-gray-50">
    <tr>
        @foreach ($titles as $title)
            <th class=" text-gray-600 px-4 py-4 text-center">
                {{ $title }}
            </th>
        @endforeach
    </tr>
</thead>
