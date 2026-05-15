<?php

namespace App\Livewire\Admin\Leaders;

use Livewire\Component;
use App\Models\Leader;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Index extends Component
{
    public function delete(Leader $leader)
    {
        $leader->delete();

        session()->flash(
            'success',
            'Leader deleted successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.leaders.index', [

            'leaders' => Leader::latest()->get(),

        ]);
    }
}