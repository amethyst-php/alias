<?php

namespace Railken\Amethyst\Schemas;

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
            Attributes\EnumAttribute::make('aliasable_type', app('amethyst')->getMorphListable('alias', 'aliasable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('aliasable_id')
                ->setRelationKey('aliasable_type')
                ->setRelationName('aliasable')
                ->setRelations(app('amethyst')->getMorphRelationable('alias', 'aliasable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
