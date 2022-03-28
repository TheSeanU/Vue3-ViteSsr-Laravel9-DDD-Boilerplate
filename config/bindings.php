<?php

use App\Core\Helpers\InterfaceLoader;

return [
    'bindings' => [
        ...(new InterfaceLoader)->interfaceRepository()
    ]
];
