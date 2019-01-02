<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class AliasAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'alias.create',
        Tokens::PERMISSION_UPDATE => 'alias.update',
        Tokens::PERMISSION_SHOW   => 'alias.show',
        Tokens::PERMISSION_REMOVE => 'alias.remove',
    ];
}
