<thead class="text-gray-700 bg-orange-100">
    <tr>
        @foreach ($titles as $title)
            <th class="px-4 py-2 text-center border border-gray-300">
                {{ $title }}
            </th>
        @endforeach
    </tr>
</thead>
