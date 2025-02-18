<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners =['refreshData' => '$refresh'];
    public function render()
    {
        return view(
            'dashboard.skills.skills-data',
            ['data' => Skill::where('name', 'like', '%' .
             $this->search . '%')->paginate(8)]
        );
    }
}
