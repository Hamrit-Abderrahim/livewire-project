<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public function render()
    {
        return view('dashboard.skills.skills-show');
    }

    protected $listeners = ['skillShow'];
    public $name,$progress ;

    public function skillShow($id) {
        $skill = Skill::find($id);
         $this -> name = $skill->name;
         $this -> progress = $skill->progress;
         $this->resetValidation();
         //?------ show modal ----
         $this->dispatch('showToggleModal');

    }

}
