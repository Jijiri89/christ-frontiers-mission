<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\HomepageSection;

class About extends Component
{
    public $about;

    public function mount()
    {
        $this->about = HomepageSection::where(
            'section_key',
            'about'
        )->first();
    }

    public function render()
    {
        return view('livewire.home.about');
    }
}