<?php

use App\Infrastructure\Helpers\InterfaceHelper;

return [
    'bindings' => [
        ...(new InterfaceHelper)->interfaceRepository()
    ]
];
