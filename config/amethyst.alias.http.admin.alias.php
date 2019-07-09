<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\AliasesController::class,
    'router'     => [
        'as'     => 'alias.',
        'prefix' => '/aliases',
    ],
];
