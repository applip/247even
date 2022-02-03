<?php

namespace App\Http\Livewire\Admin\Topic;

use App\Models\Admin;
use App\Models\Topic;
use Livewire\Component;

class UpdateTopic extends Component
{
    public $topic;
    public function mount(Topic $topic){
        $this->topic = $topic;
    }
    public function render()
    {
        return view('livewire.admin.topic.update')->layout('layouts.admin');
    }
}
