<?php

namespace App\Http\Livewire\Admin\Admin;

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
    public $admin;

    public function mount(Admin $admin){
        $this->admin = $admin;
        $this->name = $admin->name;
        $this->username = $admin->username;
        $this->email = $admin->email;
        $this->rules = [
            'name' => 'required',
            'username' => "required|unique:admins,username,{$admin->id}",
            'email' => "required|email|unique:admins,email,{$admin->id}",
            'password' => 'nullable|min:8',
        ];
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.admin.update-form');
    }

    public function submit(Admin $admin){
        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
        ];
        if($this->password){
            $data['password'] = Hash::make($this->password);
        }
        $admin->update($data);

        return redirect()->route('admin.admins');
    }
}
