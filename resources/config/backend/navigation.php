<?php

return [
    'items' => [
        0   => [
            'slug'        => 'dashboard',
            'name'        => 'motor-backend::backend/global.dashboard',
            'icon'        => 'fa fa-home',
            'route'       => 'backend.dashboard',
            'roles'       => [ 'SuperAdmin' ],
            'permissions' => [ 'dashboard.read' ]
        ],
        900 => [
            'slug'        => 'administration',
            'name'        => 'motor-backend::backend/global.administration',
            'icon'        => 'fa fa-cogs',
            'route'       => null,
            'roles'       => [ 'SuperAdmin' ],
            'permissions' => [],
            'items'       => [
                100  => [
                    'slug'        => 'users',
                    'name'        => 'motor-backend::backend/users.users',
                    'icon'        => 'fa fa-user',
                    'route'       => 'backend.users.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ],
                110 => [
                    'slug'        => 'languages',
                    'name'        => 'motor-backend::backend/languages.languages',
                    'icon'        => 'fa fa-globe',
                    'route'       => 'backend.languages.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ],
                120 => [
                    'slug'        => 'clients',
                    'name'        => 'motor-backend::backend/clients.clients',
                    'icon'        => 'fa fa-plus',
                    'route'       => 'backend.clients.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ],
                130 => [
                    'slug'        => 'email_templates',
                    'name'        => 'motor-backend::backend/email_templates.email_templates',
                    'icon'        => 'fa fa-plus',
                    'route'       => 'backend.email_templates.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ],
                140 => [
                    'slug'        => 'roles',
                    'name'        => 'motor-backend::backend/roles.roles',
                    'icon'        => 'fa fa-plus',
                    'route'       => 'backend.roles.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ],
                150 => [
                    'slug'        => 'permissions',
                    'name'        => 'motor-backend::backend/permissions.permissions',
                    'icon'        => 'fa fa-plus',
                    'route'       => 'backend.permissions.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [],
                ]
            ]
        ]
    ]
];