<?php

namespace App\Http\Livewire\Admin\Agent;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateForm extends Component
{
    public $name;
    public $username;
    public $email;
    public $password;

    public $rules = [
        'name' => 'required',
        'username' => 'required|unique:admins,username',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:8',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.agent.create-form');
    }

    public function submit(){
        Admin::create([
            'name'=> $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        return redirect()->route('admin.agents');
    }
}
