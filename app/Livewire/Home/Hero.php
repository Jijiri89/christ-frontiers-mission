<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\HomepageSection;

class Hero extends Component
{
    public $hero;

    public function mount()
    {
        $this->hero = HomepageSection::where(
            'section_key',
            'hero'
        )->first();
    }

    public function render()
    {
        return view('livewire.home.hero');
    }
}