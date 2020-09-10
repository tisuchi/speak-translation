<?php

return [
    'title' => 'Automated Boleto Reminder',
    'tabs' => [
        'settings' => [
            'title' => 'Settings',
            'whatsapp_confirguration' => [
                'title' => 'WhatsApp Confirguration',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Phone Number',
                    'details' => 'We include a link to your WhatsApp support suuport number in every message (mendatory)',
                    'country_code' => 'Country Code',
                    'whatsapp_number' => 'WhatsApp Support Number',
                ],
            ],
            'order_confirmation_template' => [
                'title' => 'Boleto Order Confirmation Template',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Boleto order confirmation',
                    'disable_button' => 'Disable',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Enter your delay time in minute format. Leave it empty for instant sending.',
                ],
            ],
            'save_button_text' => 'Save Changes'
        ],
        'analytics' => [
            'title' => 'Analytics',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facilis nesciunt possimus? Adipisci aliquid animi, aspernatur cupiditate deleniti dolorum excepturi, expedita explicabo facere laudantium magni nostrum rem! Doloribus minus, reiciendis?',
            'table' => [
                'checkout' => 'Checkout',
                'date' => 'Date',
                'name' => 'Name',
                'amount' => 'Amount',
                'status' => 'Status',
                'message' => 'Message',
            ],
        ]
    ],
];
