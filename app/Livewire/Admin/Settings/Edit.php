<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Edit extends Component
{
    use WithFileUploads;

    public Setting $setting;

    public $site_name;

    public $email;

    public $phone;

    public $address;

    public $logo;

    public $newLogo;

    public $removeLogo = false;

    public function mount()
    {
        $this->setting = Setting::firstOrCreate([
            'id' => 1,
        ]);

        $this->site_name = $this->setting->site_name;

        $this->email = $this->setting->email;

        $this->phone = $this->setting->phone;

        $this->address = $this->setting->address;

        $this->logo = $this->setting->logo;
    }

    public function update()
    {
        $this->validate([

            'site_name' => 'nullable|string|max:255',

            'email' => 'nullable|email|max:255',

            'phone' => 'nullable|string|max:255',

            'address' => 'nullable|string|max:255',

            'newLogo' => 'nullable|image|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | Remove Logo
        |--------------------------------------------------------------------------
        */

        if ($this->removeLogo) {

            $this->logo = null;
        }

        /*
        |--------------------------------------------------------------------------
        | Upload New Logo
        |--------------------------------------------------------------------------
        */

        if ($this->newLogo) {

            $this->logo = $this->newLogo->store(
                'settings',
                'public'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Update Settings
        |--------------------------------------------------------------------------
        */

        $this->setting->update([

            'site_name' => $this->site_name,

            'email' => $this->email,

            'phone' => $this->phone,

            'address' => $this->address,

            'logo' => $this->logo,

        ]);

        session()->flash(
            'success',
            'Settings updated successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.settings.edit');
    }
}