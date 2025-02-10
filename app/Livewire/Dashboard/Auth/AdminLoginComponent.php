<?php

namespace App\Livewire\Dashboard\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Validate;

class AdminLoginComponent extends Component
{

    
    //?----- property ------------
    #[Validate('required|string|email')]

    public $email;
    #[Validate('required')]

    public $password;
    #[Validate('nullable')]
    public $remember;
    
    //?------ validation rules-------------

    //  function rules () {
    //     return [
    //         'email' => 'required|string|email',
    //         'password' => 'required',
    //          'remember' => 'nullable',
    //     ];
    //  }
//?--------------- login function -----------------
public function login ()
 {
   $this->validate();
   if(!Auth::guard('admin')->attempt([
    'email'=>$this->email,
    'password'=>$this->password,
  
   ] , $this->remember)) {
    throw ValidationException::withMessages([
        'email' => trans('auth.failed'),
    ]);
   }
   return to_route('dashboard.index');
 }


    public function render()
    {
        return view('dashboard.auth.admin-login-component');
    }
}
