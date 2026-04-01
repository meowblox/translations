<?php

/*
* WAIT UP!!
* If you're a translator, this is NOT what you should be editing
* see lang/(your language)/messages.php!!
*/

namespace Meowblox\Translations;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $langPath = __DIR__.'/lang';

        // register meow namespace
        // e.g... __('meow::messages.already_a_beta_tester')
        $this->loadTranslationsFrom($langPath, 'meow');

        // php artisan vendor:publish
        // if we need to publish them into the app itself...
        $this->publishes([
            $langPath => lang_path('vendor/meowblox'),
        ], 'meowblox-translations');
    }
}