<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

class InterfaceHelper
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public static function interfaceRepository()
    {
        $repository = str_replace('.php', '', glob('App\\Domains\\*\\Repository\\*.php'));
        $interface = str_replace('.php', '', glob('App\\Application\\*\\Interface\\*.php'));

        return array_combine($interface, $repository);
    }
}
