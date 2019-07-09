<?php

return [
    'table'      => 'amethyst_aliases',
    'comment'    => 'Alias',
    'model'      => Amethyst\Models\Alias::class,
    'schema'     => Amethyst\Schemas\AliasSchema::class,
    'repository' => Amethyst\Repositories\AliasRepository::class,
    'serializer' => Amethyst\Serializers\AliasSerializer::class,
    'validator'  => Amethyst\Validators\AliasValidator::class,
    'authorizer' => Amethyst\Authorizers\AliasAuthorizer::class,
    'faker'      => Amethyst\Fakers\AliasFaker::class,
    'manager'    => Amethyst\Managers\AliasManager::class,
];
