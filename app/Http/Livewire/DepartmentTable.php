<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DepartmentTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Department::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.department_table';
    }

    public function delete(Department $department){
        $department->delete();
    }
}
