<thead class=" bg-gray-50 dark:border-strokedark dark:bg-boxdark">
    <tr>
        @foreach ($titles as $title)
            <th class=" text-gray-600 px-4 py-4 text-center dark:text-white">
                {{ $title }}
            </th>
        @endforeach
    </tr>
</thead>
