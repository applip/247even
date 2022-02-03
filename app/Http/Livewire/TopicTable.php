<?php

namespace App\Http\Livewire;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TopicTable extends DataTableComponent
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
        return Topic::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.topic_table';
    }

    public function delete(Topic $topic){
        $topic->delete();
    }
}
