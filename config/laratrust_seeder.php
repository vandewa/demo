<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'owner' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'payments' => 'c,r,u,d',
        ],
        'admin' => [
            'profile' =>  'c,r,u,d',
            'users' => 'c,r,u,d',
            'master-data' =>  'c,r,u,d',
            'keuangan' => 'c,r,u,d',
            'profile' => 'r,u',
            'payments' => 'c,r,u,d',
            'seleksi-berkas' => 'c,r,u,d',
            'psikotest'  => 'c,r,u,d',
            'wawancara'  => 'c,r,u,d',
            'mcu'  => 'c,r,u,d',
            'pendidikan'  => 'c,r,u,d',
            'wawancara-user'  => 'c,r,u,d',
            'pengurusan-berkas'  => 'c,r,u,d',
            'keberangkatan'  => 'c,r,u,d',
            'siswa' => 'c,r,u,d',
            'monitoring' => 'c,r,u,d',
            'magang' => 'c,r,u,d',
        ],
        'lpk' => [
            'profile' => 'r,u',
            'siswa' => 'c,r,u,d',
        ],
        'psikotest' => [
            'psikotest'  => 'c,r,u,d',
        ],
        'sales' => [
            'siswa' => 'c,r,u,d',
        ],
        'pewawancara' => [
            'wawancara'  => 'c,r,u,d',
            'wawancara-user'  => 'c,r,u,d',
        ],

        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
