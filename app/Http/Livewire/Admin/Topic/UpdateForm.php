<?php

namespace App\Http\Livewire\Admin\Topic;

use App\Models\Topic;
use Livewire\Component;

class UpdateForm extends Component
{

    public $name;
    public $topic;

    public function mount(Topic $topic){
        $this->topic = $topic;
        $this->name = $topic->name;
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
        return view('livewire.admin.topic.update-form');
    }

    public function submit(Topic $topic){
        $data = [
            'name' => $this->name,
        ];
        $topic->update($data);

        return redirect()->route('admin.topics');
    }
}
