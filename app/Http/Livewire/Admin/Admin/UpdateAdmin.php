<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Admin;
use Livewire\Component;

class UpdateAdmin extends Component
{
    public $admin;
    public function mount(Admin $admin){
        $this->admin = $admin;
    }
    public function render()
    {
        return view('livewire.admin.admin.update')->layout('layouts.admin');
    }
}
