<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\Dashboard\AdminLoginRequest;

class AdminLogin extends Component
{

    public $email;
    public $password;
    public $remember;



    public function rules(){
        return(new AdminLoginRequest())->rules();
    }

   
    //  public function messages(){
    //     return(new AdminLoginRequest())->messages();
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
