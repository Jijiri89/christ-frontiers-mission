<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Edit extends Component
{
    use WithFileUploads;

    public Event $event;

    public $title;

    public $description;

    public $location;

    public $start_date;

    public $end_date;

    public $image;

    public $newImage;

    public $removeImage = false;

    public $is_active = true;

    public function mount(Event $event)
    {
        $this->event = $event;

        $this->title = $event->title;

        $this->description = $event->description;

        $this->location = $event->location;

        $this->start_date = $event->start_date;

        $this->end_date = $event->end_date;

        $this->image = $event->image;

        $this->is_active = $event->is_active;
    }

    public function update()
    {
        $this->validate([

            'title' => 'required|string|max:255',

            'description' => 'nullable|string',

            'location' => 'nullable|string|max:255',

            'start_date' => 'required|date',

            'end_date' => 'nullable|date|after_or_equal:start_date',

            'newImage' => 'nullable|image|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | Remove Image
        |--------------------------------------------------------------------------
        */

        if ($this->removeImage) {

            $this->image = null;
        }

        /*
        |--------------------------------------------------------------------------
        | Upload New Image
        |--------------------------------------------------------------------------
        */

        if ($this->newImage) {

            $this->image = $this->newImage->store(
                'events',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Update Event
        |--------------------------------------------------------------------------
        */

        $this->event->update([

            'title' => $this->title,

            'description' => $this->description,

            'location' => $this->location,

            'start_date' => $this->start_date,

            'end_date' => $this->end_date,

            'image' => $this->image,

            'is_active' => $this->is_active,

        ]);

        session()->flash(
            'success',
            'Event updated successfully.'
        );
         return redirect()->route('dashboard.events');
    }

    public function render()
    {
        return view('livewire.admin.events.edit');
    }
}