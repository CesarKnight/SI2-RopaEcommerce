<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ],
        // 'nombre_rol' => [
        //     'nombre_modulo' => 'c,r,u,d',
        // ],
        // plantilla para crear un rol
    ],

    'permissions_map' => [
        'c' => 'create',        //crear
        'r' => 'read',          //leer
        'u' => 'update',        //actualizar
        'd' => 'delete',        //eliminar
    ],
];
