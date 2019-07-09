<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\AliasFaker;
use Amethyst\Managers\AliasManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class AliasTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = AliasManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AliasFaker::class;
}
