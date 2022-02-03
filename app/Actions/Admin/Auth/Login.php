<?php

namespace App\Actions\Admin\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class Login
{
    use AsAction;

    public function handle($data)
    {
        if(auth('admin')->attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{

            return back()->withInput($data);
        }
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }


    public function asController(ActionRequest $request){
        return $this->handle($request->validated());
    }
}
