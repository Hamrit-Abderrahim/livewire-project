<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public function render()
    {
        return view('dashboard.skills.skills-delete');
    }
    protected $listeners = ['skillDelete'];
    public $skill ,$name,$progress ;

    public function skillDelete($id) {
         $this ->skill = Skill::find($id);
          //?------ show modal ----
         $this->dispatch('deleteToggleModal');

    }
    public function submit()
    {
        $this->skill->delete();
        $this->reset('skill');
        //!---- hide modal ------
        $this->dispatch('deleteToggleModal');
        //!---- refresh page  ------
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

}
