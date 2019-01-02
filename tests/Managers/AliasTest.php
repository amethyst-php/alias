<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\AliasFaker;
use Railken\Amethyst\Managers\AliasManager;
use Railken\Amethyst\Tests\BaseTest;
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
