<?php

namespace App\Http\Livewire\Admin\Topic;

use App\Models\Admin;
use App\Models\Topic;
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
        return view('livewire.admin.topic.create-form');
    }

    public function submit(){
        $admin = Topic::create([
            'name'=> $this->name,
        ]);

        return redirect()->route('admin.topics');
    }
}
