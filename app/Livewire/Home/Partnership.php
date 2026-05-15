<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\HomepageSection;

class Partnership extends Component
{
    public $partnership;

    public function mount()
    {
        $this->partnership = HomepageSection::where(
            'section_key',
            'partnership'
        )->first();
    }

    public function render()
    {
        return view('livewire.home.partnership');
    }
}