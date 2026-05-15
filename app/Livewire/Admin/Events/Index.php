<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Index extends Component
{
    public function delete(Event $event)
    {
        $event->delete();

        session()->flash(
            'success',
            'Event deleted successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.events.index', [

            'events' => Event::latest()->get(),

        ]);
    }
}