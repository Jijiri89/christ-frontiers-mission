<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Index extends Component
{
    public function toggleAdmin($id)
    {
        $user = User::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | Prevent Removing Yourself
        |--------------------------------------------------------------------------
        */

        if ($user->id === auth()->id()) {

            session()->flash(
                'error',
                'You cannot remove your own admin access.'
            );

            return;
        }

        $user->update([
            'is_admin' => ! $user->is_admin,
        ]);

        session()->flash(
            'success',
            'User role updated successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.users.index', [

            'users' => User::latest()->get(),

        ]);
    }
}