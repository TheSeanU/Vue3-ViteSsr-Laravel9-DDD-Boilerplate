<?php

use App\Application\Helpers\InterfaceHelper;

return [
    'bindings' => [
        ...(new InterfaceHelper)->interfaceRepository()
    ]
];
