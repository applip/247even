<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Department;
use Livewire\Component;

class UpdateForm extends Component
{

    public $name;
    public $department;

    public function mount(Department $department){
        $this->department = $department;
        $this->name = $department->name;
        $this->rules = [
            'name' => 'required',
        ];
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.department.update-form');
    }

    public function submit(Department $department){
        $data = [
            'name' => $this->name,
        ];
        $department->update($data);

        return redirect()->route('admin.departments');
    }
}
