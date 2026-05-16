@php
    use Illuminate\Support\Facades\Storage;

    $settings = \App\Models\Setting::first();
@endphp

@if($settings?->logo)

    <img
        src="{{ Storage::url($settings->logo) }}"
        alt="{{ $settings->site_name }}"
        class="object-contain w-12 h-12"
    >

@else

    <div class="flex items-center justify-center w-12 h-12 text-lg font-extrabold text-white rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">

        CF

    </div>

@endif