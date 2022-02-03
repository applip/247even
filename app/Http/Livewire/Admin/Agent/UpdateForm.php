<?php

namespace App\Http\Livewire\Admin\Agent;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdateForm extends Component
{

    public $name;
    public $username;
    public $email;
    public $password;
    public $rules;
    public $agent;

    public function mount(Admin $agent){
        $this->agent = $agent;
        $this->name = $agent->name;
        $this->username = $agent->username;
        $this->email = $agent->email;
        $this->rules = [
            'name' => 'required',
            'username' => "required|unique:admins,username,{$this->agent->id}",
            'email' => "required|email|unique:admins,email,{$this->agent->id}",
            'password' => 'nullable|min:8',
        ];
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.agent.update-form');
    }

    public function submit(Admin $agent){
        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
        ];
        if($this->password){
            $data['password'] = Hash::make($this->password);
        }
        $agent->update($data);

        return redirect()->route('admin.agents');
    }
}
