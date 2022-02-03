<x-livewire-tables::table.cell>{{ $row->id }}</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>{{ $row->name }}</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <a
        href="{{ route('admin.departments.edit', $row->id) }}"
            class="py-2 px-3 text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Edit
    </a>
    <button wire:click="delete({{ $row->id }})"
            class="py-2 px-3 text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Delete
    </button>
</x-livewire-tables::table.cell>
