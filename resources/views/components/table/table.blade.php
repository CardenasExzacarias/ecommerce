@php
    $titles = array_keys($elements[0]->getAttributes());
    $titles[] = 'Acciones';
    if (isset($edit)) {
        if ($edit != true) {
            $edit = false;
        }
    } else {
        $edit = true;
    }
@endphp

<table class="w-full border-collapse table-auto">
    <x-table.head :titles="$titles" />
    <x-table.body :elements="$elements" :edit="$edit" :prefix="$prefix" :id="$id" />
</table>
