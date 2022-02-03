<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Banner extends Component
{
    public $style;
    public $message;
    public function render()
    {
        return view('livewire.admin.banner');
    }
}
