<tbody>
    @foreach ($elements as $element)
        <tr class="dark:border-strokedark dark:bg-boxdark dark:text ">
            @foreach ($element->getAttributes() as $attribute)
                <td class="p-4 text-center text-gray-700 border-b dark:text-white">{{ $attribute }}</td>
            @endforeach
            <td class="p-4 text-center border-b">
                <div class="flex justify-center items-center space-x-2">
                    <a href="{{ route("$prefix.show", $element->$id) }}" class="text-green-500 hover:text-green-700">
                        @svg('eva-eye', 'w-8 h-8 inline-block')
                    </a>
                    @if ($edit)
                        <a href="{{ url("$prefix/" . $element->$id . '/edit') }}"
                            class="text-blue-500 hover:text-blue-700">
                            @svg('eva-edit', 'w-8 h-8 inline-block')
                        </a>
                    @endif
                    <form class="flex items-center p-0 m-0 " action="{{ route("$prefix.destroy", $element->$id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">
                            @svg('eva-trash', 'w-8 h-8 inline-block')
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
