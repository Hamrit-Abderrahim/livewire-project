<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{

    protected $listeners = ['skillUpdate'];
    public $skill ,$name,$progress ;

    public function skillUpdate($id) {
         $this ->skill = Skill::find($id);
         $this -> name = $this->skill->name;
         $this -> progress = $this->skill->progress;
         $this->resetValidation();
         //?------ show modal ----
         $this->dispatch('editToggleModal');

    }
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
        $this->skill->update($data);
         //!----- reset input -----
        $this ->reset(['name' , 'progress']);
        //!---- hide modal ------
        $this->dispatch('editToggleModal');
        //!---- refresh page  ------
        $this->dispatch('refreshData')->to(SkillsData::class);
    }


    public function render()
    {
        return view('dashboard.skills.skills-update');
    }
}
