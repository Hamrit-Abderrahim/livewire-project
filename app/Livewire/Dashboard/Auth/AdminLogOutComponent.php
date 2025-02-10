<?php

namespace App\Livewire\Dashboard\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class AdminLogOutComponent extends Component
{

    public function logOut(Request $request) {
         
            Auth::guard('admin')->logout();
    
            session()->forget('guard.admin');
    
            session()->regenerateToken();
    
            return to_route('dashboard.login');
        
    }

    public function render()
    {
        return view('dashboard.auth.admin-log-out-component');
    }
}
