<?php

return [

    // All other configuration options are the same as the default.

    /*
    |---------------------------------------------------------------------------
    | Layout
    |---------------------------------------------------------------------------
    | The view that will be used as the layout when rendering a single component
    | as an entire page via `Route::get('/post/create', CreatePost::class);`.
    | In this case, the view returned by CreatePost will render into $slot.
    |
    */

    'layout' => 'layouts.app', // Default is 'components.layouts.app'. The starter kit uses 'layouts.app' to match the default Laravel layout.

    /*
    |---------------------------------------------------------------------------
    | Eloquent Model Binding
    |---------------------------------------------------------------------------
    |
    | Previous versions of Livewire supported binding directly to eloquent model
    | properties using wire:model by default. However, this behavior has been
    | deemed too "magical" and has therefore been put under a feature flag.
    |
    */

    'legacy_model_binding' => true, // Default is false. The starter kit uses the legacy model binding.

    // All other configuration options are the same as the default.

    /*
    |---------------------------------------------------------------------------
    | Asset URL
    |---------------------------------------------------------------------------
    | Here you may specify a custom asset URL for Livewire to use when
    | generating asset URLs. This is useful if you are using a CDN
    | or have a custom domain for serving your assets.
    |---------------------------------------------------------------------------
    */
    'asset_url' => env('APP_URL'),
];
