<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Leader;
use App\Models\HomepageSection;

class Leadership extends Component
{
    public $leadership;

    public function mount()
    {
        $this->leadership = HomepageSection::where(
            'section_key',
            'leadership'
        )->first();
    }

    public function render()
    {
        return view('livewire.home.leadership', [

            'leaders' => Leader::where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

        ]);
    }
}