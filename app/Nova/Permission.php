<?php

namespace App\Nova;

class Permission extends \Itsmejoshua\Novaspatiepermissions\Permission
{
    use \Itsmejoshua\Novaspatiepermissions\PermissionsBasedAuthTrait;

    public static $permissionsForAbilities = [
        'all' => 'Manage permissions',
    ];
}
