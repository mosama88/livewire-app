<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Component
{

    public $email;
    public $password;
    public $remember;



    public function rules(){
        return[
            'email'=>'required|string|email',
            'password'=>'required',
            'remember'=>'nullable',
        ];
    }

    // public function messages(){
    //     return[
    //         'email.required'=>'البريد الالكترونى مطلوب',
    //     ];
    // }
    
    
    public function submit(){
    
        $this->validate();

        if(!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password],$this->remember)){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return to_route('dashboard.index');
    }


    public function render()
    {
        return view('dashboard.auth.admin-login');
    }
}
