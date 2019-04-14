<?php

return [
    'table'      => 'amethyst_aliases',
    'comment'    => 'Alias',
    'model'      => Railken\Amethyst\Models\Alias::class,
    'schema'     => Railken\Amethyst\Schemas\AliasSchema::class,
    'repository' => Railken\Amethyst\Repositories\AliasRepository::class,
    'serializer' => Railken\Amethyst\Serializers\AliasSerializer::class,
    'validator'  => Railken\Amethyst\Validators\AliasValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\AliasAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\AliasFaker::class,
    'manager'    => Railken\Amethyst\Managers\AliasManager::class
];
