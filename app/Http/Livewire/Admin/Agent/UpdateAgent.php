<?php

namespace App\Http\Livewire\Admin\Agent;

use App\Models\Admin;
use Livewire\Component;

class UpdateAgent extends Component
{
    public $agent;
    public function mount(Admin $agent){
        $this->$agent = $agent;
    }
    public function render()
    {
        return view('livewire.admin.agent.update')->layout('layouts.admin');
    }
}
