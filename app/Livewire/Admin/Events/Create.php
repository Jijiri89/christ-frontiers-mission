<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Create extends Component
{
    use WithFileUploads;

    public $title;

    public $description;

    public $location;

    public $start_date;

    public $end_date;

    public $is_active = true;

    public $newImage;

    public function save()
    {
        $this->validate([

            'title' => 'required|string|max:255',

            'description' => 'nullable|string',

            'location' => 'nullable|string|max:255',

            'start_date' => 'required|date',

            'end_date' => 'nullable|date|after_or_equal:start_date',

            'newImage' => 'nullable|image|max:2048',

        ]);

        $image = null;

        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        if ($this->newImage) {

            $image = $this->newImage->store(
                'events',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Create Event
        |--------------------------------------------------------------------------
        */

        Event::create([

            'title' => $this->title,

            'slug' => Str::slug($this->title),

            'description' => $this->description,

            'location' => $this->location,

            'start_date' => $this->start_date,

            'end_date' => $this->end_date,

            'image' => $image,

            'is_active' => $this->is_active,

        ]);

        session()->flash(
            'success',
            'Event created successfully.'
        );

        return redirect()->route('dashboard.events');
    }

    public function render()
    {
        return view('livewire.admin.events.create');
    }
}