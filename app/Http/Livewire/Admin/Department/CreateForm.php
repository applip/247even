<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Admin;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateForm extends Component
{
    public $name;

    public $rules = [
        'name' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.department.create-form');
    }

    public function submit(){
        $admin = Department::create([
            'name'=> $this->name,
        ]);

        return redirect()->route('admin.departments');
    }
}
