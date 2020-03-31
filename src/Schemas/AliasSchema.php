<?php

namespace Amethyst\Schemas;

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
            \Amethyst\Core\Attributes\DataNameAttribute::make('aliasable_type')
                ->setRequired(true),
            Attributes\MorphToAttribute::make('aliasable_id')
                ->setRelationKey('aliasable_type')
                ->setRelationName('aliasable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
