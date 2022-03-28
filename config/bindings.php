<?php

use App\Core\Helpers\InterfaceHelper;

return [
    'bindings' => [
        ...(new InterfaceHelper)->interfaceRepository()
    ]
];
