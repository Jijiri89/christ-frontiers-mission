<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\HomepageSection;

class Mission extends Component
{
    public $mission;

    public function mount()
    {
        $this->mission = HomepageSection::where(
            'section_key',
            'mission'
        )->first();
    }

    public function render()
    {
        return view('livewire.home.mission');
    }
}