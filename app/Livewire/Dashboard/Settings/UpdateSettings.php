<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $settings; //data binding  :  in livewire.php -> active  'legacy_model_binding' => true,
   
       //!-------- mount -------------

    public function mount() {
        $this->settings = Setting::find(1);
      
    }
      
    //!-------- rules -------------
    public function rules() {
     return [
        'settings.name'=> 'required|string',
        'settings.email'=> 'required|email',
        'settings.phone'=> 'required',
        'settings.address'=> 'required',
        'settings.facebook'=> 'nullable|url',
        'settings.twitter'=> 'nullable|url',
        'settings.linkedin'=> 'nullable|url',
        'settings.instagram'=> 'nullable|url',
     ];
}
  //!-------- submit -------------

  public function submit() {
    $this->validate();
    $this->settings->save();
    session()->flash('message', 'Settings successfully updated.');

  
}
    //!-------- runder -------------------
    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
