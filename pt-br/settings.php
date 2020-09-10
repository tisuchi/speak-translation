<?php

return [
    'title' => 'General Settings',
    'tabs' => [
        'settings' => [
            'title' => 'Loja',
            'store' => [
                'title' => 'Nome da Loja',
                'title_for_new_user' => 'Configure sua loja primeiro',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Nome da Loja',
                    'details' => 'Digite o nome da sua loja. 
                    Obs: sem oncartx.io.',
                    'name' => 'Nome da Loja',
                ],
            ],
            'token' => [
                'title' => 'Token da Loja',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Token da Loja',
                    'details' => 'Cada loja tem o seu token exclusivo. Este token está disponível na dashboard da sua loja no CartX.',
                    'token' => 'Token',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
    ],
];
