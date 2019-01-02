<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class AliasSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\LocaleAttribute::make(),
            Attributes\NumberAttribute::make('weight'),
            Attributes\EnumAttribute::make('aliasable_type', array_keys(Config::get('amethyst.alias.data.alias.aliasables')))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('aliasable_id')
                ->setRelationKey('aliasable_type')
                ->setRelationName('aliasable')
                ->setRelations(Config::get('amethyst.alias.data.alias.aliasables'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
