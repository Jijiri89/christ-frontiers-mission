<?php

namespace App\Livewire\Admin\Leaders;

use App\Models\Leader;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Edit extends Component
{
    use WithFileUploads;

    public Leader $leader;

    public $name;
    public $ministry;
    public $position;
    public $bio;
    public $image;
    public $sort_order;
    public $is_active;

    public $newImage;

    public $removeImage = false;

    public function mount(Leader $leader)
    {
        $this->leader = $leader;

        $this->name = $leader->name;

        $this->position = $leader->position;

        $this->bio = $leader->bio;

        $this->image = $leader->image;

        $this->sort_order = $leader->sort_order;

        $this->is_active = $leader->is_active;
        $this->ministry = $leader->ministry;
    }

    public function update()
    {
        $this->validate([

            'name' => 'required|string|max:255',

            'position' => 'required|string|max:255',

            'bio' => 'nullable|string',

            'sort_order' => 'nullable|integer',

            'newImage' => 'nullable|image|max:2048',
            'ministry' => 'required|string|max:255',

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
                'leaders',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Update Leader
        |--------------------------------------------------------------------------
        */

        $this->leader->update([

            'name' => $this->name,

            'position' => $this->position,

            'bio' => $this->bio,

            'image' => $this->image,

            'sort_order' => $this->sort_order,

            'is_active' => $this->is_active,
            'ministry' => $this->ministry,

        ]);

        session()->flash(
            'success',
            'Leader updated successfully.'
        );
        return redirect()->route('dashboard.leaders');
    }

    public function render()
    {
        return view('livewire.admin.leaders.edit');
    }
}