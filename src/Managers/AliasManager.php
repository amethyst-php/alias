<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Alias newEntity()
 * @method \Amethyst\Schemas\AliasSchema getSchema()
 * @method \Amethyst\Repositories\AliasRepository getRepository()
 * @method \Amethyst\Serializers\AliasSerializer getSerializer()
 * @method \Amethyst\Validators\AliasValidator getValidator()
 * @method \Amethyst\Authorizers\AliasAuthorizer getAuthorizer()
 */
class AliasManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.alias.data.alias';
}
