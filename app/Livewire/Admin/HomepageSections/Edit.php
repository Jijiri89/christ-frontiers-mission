<?php

namespace App\Livewire\Admin\HomepageSections;

use Livewire\Component;
use App\Models\HomepageSection;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Edit extends Component
{
    use WithFileUploads;

    public HomepageSection $section;

    public $title;
    public $subtitle;
    public $content;
    public $button_text;
    public $button_link;
    public $image;

    // Upload property
    public $newImage;

    // Remove image checkbox
    public $removeImage = false;

    public function mount(HomepageSection $section)
    {
        $this->section = $section;

        $this->title = $section->title;
        $this->subtitle = $section->subtitle;
        $this->content = $section->content;
        $this->button_text = $section->button_text;
        $this->button_link = $section->button_link;
        $this->image = $section->image;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',

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
                'homepage',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Update Section
        |--------------------------------------------------------------------------
        */

        $this->section->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
            'button_text' => $this->button_text,
            'button_link' => $this->button_link,
            'image' => $this->image,
        ]);

        session()->flash(
            'success',
            'Homepage section updated successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.homepage-sections.edit');
    }
}