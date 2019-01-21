<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\AliasesController::class,
    'router'     => [
        'as'     => 'alias.',
        'prefix' => '/aliases',
    ],
];
