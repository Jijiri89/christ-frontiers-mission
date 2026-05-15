<?php

namespace App\Livewire\Admin\HomepageSections;

use App\Models\HomepageSection;
use Livewire\Attributes\Layout;
use Livewire\Component;

 #[Layout('layouts.app')]

class Index extends Component
{
   
    public function render()
    {
        return view('livewire.admin.homepage-sections.index', [
            'sections' => HomepageSection::latest()->get(),
        ]);
    }
}