<?php

/**
 * Inertia Laravel Blade Share
 * Provides data for common blade-directives from laravel to internia-vue
 */

namespace Frogbob\InertiaLaravelBladeShare;

use Illuminate\Support\MessageBag;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class InertiaLaravelBladeShareServiceProvider extends ServiceProvider {

    public function boot(){
    }

    /**
     * Register the service provider.
     */
    public function register(){
        Inertia::share([
            'auth' => function() {
                return auth()->check();
            },
            'csrf_token' => function() {
                return session()->get('_token');
            },
            'errors' => function() {
                return session()->get('errors', new MessageBag);
            }
        ]);
    }
}
