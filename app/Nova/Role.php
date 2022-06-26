<?php

namespace App\Nova;

class Role extends \Itsmejoshua\Novaspatiepermissions\Role
{
    use \Itsmejoshua\Novaspatiepermissions\PermissionsBasedAuthTrait;

    public static $permissionsForAbilities = [
        'all' => 'Manage roles',
    ];
}
