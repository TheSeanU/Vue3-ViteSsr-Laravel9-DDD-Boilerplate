<?php 

namespace App\Core\Providers;

trait loader {
    public static function repository() {
        $repository = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Repository\\' . "*.php"));
        foreach ($repository as $item) return $item;
    }
    public static function Interface()
    {
        $interface = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Interface\\' . "*.php"));
        foreach ($interface as $item) return $item;
    }

}
