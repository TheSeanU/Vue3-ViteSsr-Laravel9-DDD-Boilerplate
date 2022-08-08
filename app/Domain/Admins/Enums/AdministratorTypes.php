<?php

declare(strict_types = 1);
 
namespace App\Domain\Admins\Enums;

final class AdministratorTypes
{
    public const ADMINISTRATOR = 1;
    public const WEBMASTER = 2;

    /**
     * Get description
     *
     * @param [type] $value
     *
     * @throws RuntimeException
     * @return string
     */
    public static function getValues($value): string
    {
        switch ($value) {
            case self::ADMINISTRATOR:
                return 'Administrator';
            case self::WEBMASTER:
                return 'onderhouder';
            default:
                throw 'Unexpected enum type';
        }
    }
}
