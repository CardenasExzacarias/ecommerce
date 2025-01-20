@php
    $titles = array_keys($elements[0]->getAttributes());
    $titles[] = 'Acciones';
@endphp

<table class="w-full border-collapse table-auto">
    <x-table.head :titles="$titles" />
    <x-table.body :elements="$elements" :prefix="$prefix" :id="$id" />
</table>
