<?php

return [
    'title' => 'General Settings',
    'tabs' => [
        'settings' => [
            'title' => 'Store',
            'store' => [
                'title' => 'Store Name',
                'title_for_new_user' => 'Setup your Shop first',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Your store name',
                    'details' => 'Please provide the store name that you have given during creating the store.',
                    'name' => 'Store name',
                ],
            ],
            'token' => [
                'title' => 'Store Token',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Store Token',
                    'details' => 'Every request demands a Bearer Token that’s unique to each store. This token is available to the store owner/admin on their dashboard.',
                    'token' => 'Token',
                ],
            ],
            'save_button_text' => 'Save Changes'
        ],
    ],
];
