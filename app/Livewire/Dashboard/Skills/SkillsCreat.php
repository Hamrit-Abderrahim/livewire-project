<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreat extends Component
{
    public $name , $progress ;

   
    public function rules()
    {
        return [
            'name' => 'required',
            'progress' => 'required|numeric',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        //!---- save data ------
        Skill::create($data);
         //!----- reset input -----
        $this ->reset(['name' , 'progress']);
        //!---- hide modal ------
        $this->dispatch('creatToggleModal');
        //!---- refresh page  ------
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

    public function render()
    {
        return view('dashboard.skills.skills-creat');
    }
}
