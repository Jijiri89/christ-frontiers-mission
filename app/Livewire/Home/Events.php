<?php

namespace App\Livewire\Home;

use App\Models\Event;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('layouts.guest')]

class Events extends Component
{
    public function render()
    {
        return view('livewire.home.events', [

           'events' => Event::where('is_active', true)
    ->where('start_date', '>=', now())
    ->orderBy('start_date')
    ->get(),

        ]);
    }
}