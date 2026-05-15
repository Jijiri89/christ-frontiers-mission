<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Home;

/*
|--------------------------------------------------------------------------
| Homepage Sections
|--------------------------------------------------------------------------
*/

use App\Livewire\Admin\HomepageSections\Index as HomepageSectionsIndex;
use App\Livewire\Admin\HomepageSections\Edit as HomepageSectionsEdit;

/*
|--------------------------------------------------------------------------
| Leaders
|--------------------------------------------------------------------------
*/

use App\Livewire\Admin\Leaders\Index as LeadersIndex;
use App\Livewire\Admin\Leaders\Create as LeadersCreate;
use App\Livewire\Admin\Leaders\Edit as LeadersEdit;

/*
|--------------------------------------------------------------------------
| Events
|--------------------------------------------------------------------------
*/

use App\Livewire\Admin\Events\Index as EventsIndex;
use App\Livewire\Admin\Events\Create as EventsCreate;
use App\Livewire\Admin\Events\Edit as EventsEdit;
use App\Livewire\Home\Events;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', Home::class)
    ->name('home');

Route::get('/events', Events::class)
    ->name('events');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'verified',
])->prefix('dashboard')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Main Dashboard
    |--------------------------------------------------------------------------
    */

    Route::view('/', 'dashboard')
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Homepage Sections
    |--------------------------------------------------------------------------
    */

    Route::get('/homepage-sections', HomepageSectionsIndex::class)
        ->name('dashboard.homepage-sections');

    Route::get('/homepage-sections/{section}/edit', HomepageSectionsEdit::class)
        ->name('dashboard.homepage-sections.edit');

    /*
    |--------------------------------------------------------------------------
    | Leaders
    |--------------------------------------------------------------------------
    */

    Route::get('/leaders', LeadersIndex::class)
        ->name('dashboard.leaders');

    Route::get('/leaders/create', LeadersCreate::class)
        ->name('dashboard.leaders.create');

    Route::get('/leaders/{leader}/edit', LeadersEdit::class)
        ->name('dashboard.leaders.edit');

    /*
    |--------------------------------------------------------------------------
    | Events
    |--------------------------------------------------------------------------
    */

    Route::get('/events', EventsIndex::class)
        ->name('dashboard.events');

    Route::get('/events/create', EventsCreate::class)
        ->name('dashboard.events.create');

    Route::get('/events/{event}/edit', EventsEdit::class)
        ->name('dashboard.events.edit');

});

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::view('/profile', 'profile')
        ->name('profile');

});

require __DIR__.'/auth.php';