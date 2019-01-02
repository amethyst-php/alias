<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class AliasFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('locale', 'en_US');
        $bag->set('weight', 20);
        $bag->set('aliasable_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('aliasable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
