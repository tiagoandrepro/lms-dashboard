<?php

return [
    'menu' => [
        [
            'name' => 'Dashboard',
            'type' => 'link',
            'route' => 'dashboard.index',
            'icon' => 'fas fa-home'
        ],
        [
            'name' => 'Menu',
            'type' => 'section',
        ],
        [
            'name' => 'Contatos',
            'type' => 'link',
            'route' => 'contacts.index',
            'icon' => 'fas fa-users',
            'dropdown' => [
                [
                    'name' => 'Responsável',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
                [
                    'name' => 'Estudantes',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
                [
                    'name' => 'Leads',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ]
            ]
        ],
        [
            'name' => 'Contratos',
            'type' => 'link',
            'route' => 'dashboard.index',
            'icon' => 'fas fa-home',
            'dropdown' => [
                [
                    'name' => 'Ativos',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
                [
                    'name' => 'Bolsas',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
                [
                    'name' => 'Cancelados',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
                [
                    'name' => 'Finalizados',
                    'type' => 'link',
                    'route' => 'contacts.index',
                ],
            ],
        ]
    ]
];
