<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Admin;
use App\Models\Department;
use Livewire\Component;

class UpdateDepartment extends Component
{
    public $department;
    public function mount(Department $department){
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.admin.department.update')->layout('layouts.admin');
    }
}
