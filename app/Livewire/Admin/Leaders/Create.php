<?php

namespace App\Livewire\Admin\Leaders;

use App\Models\Leader;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Create extends Component
{
    use WithFileUploads;

    public $name;

    public $ministry;

    public $position;

    public $bio;

    public $sort_order = 0;

    public $is_active = true;

    public $newImage;

    public function save()
    {
        $this->validate([

            'name' => 'required|string|max:255',

            'ministry' => 'required|string|max:255',

            'position' => 'required|string|max:255',

            'bio' => 'nullable|string',

            'sort_order' => 'nullable|integer',

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
                'leaders',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Create Leader
        |--------------------------------------------------------------------------
        */

        Leader::create([

            'name' => $this->name,

            'ministry' => $this->ministry,

            'position' => $this->position,

            'bio' => $this->bio,

            'image' => $image,

            'sort_order' => $this->sort_order,

            'is_active' => $this->is_active,

        ]);

        session()->flash(
            'success',
            'Leader created successfully.'
        );

        return redirect()->route('dashboard.leaders');
    }

    public function render()
    {
        return view('livewire.admin.leaders.create');
    }
}