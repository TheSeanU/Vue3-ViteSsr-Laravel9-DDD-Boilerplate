<?php declare(strict_types = 1);

namespace App\Application\Helpers;

class InterfaceHelper {     
    
    public static function interfaceRepository()
    {               
        $repository = str_replace('.php', '', glob('App\\Domain\\' . '*' . '\\Repository\\' . '*.php'));
        $interface = str_replace('.php', '', glob('App\\Domain\\' . '*' . '\\Interface\\' . '*.php'));

        return array_combine($interface, $repository);
    }
}