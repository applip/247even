<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Admin;

class AdminTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Username", "username")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Admin::where('is_admin', true);
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.admin_table';
    }

    public function delete(Admin $admin){
        $admin->delete();
    }
}
