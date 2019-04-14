<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class AliasServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        \Illuminate\Database\Eloquent\Builder::macro('aliases', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Alias::class, 'aliases', 'aliasable');
        });
    }
}
