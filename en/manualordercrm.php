<?php

return [
    'title' => 'Automated Order CRM',
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
                    'delay_help_text' => 'Enter your delay time in hour format. Leave it empty for instant sending.',
                ],
            ],
            'save_button_text' => 'Save Changes'
        ],
        'orders' => [
            'title' => 'Orders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facilis nesciunt possimus? Adipisci aliquid animi, aspernatur cupiditate deleniti dolorum excepturi, expedita explicabo facere laudantium magni nostrum rem! Doloribus minus, reiciendis?',
            'table' => [
                'order' => 'Order , User',
                'date' => 'Date',
                'status' => 'Status',
                'amount' => 'Amount',
                'tags' => 'Tags',
                'whatsapp' => 'WhatsApp',
            ],
        ]
    ],
    'modals' => [
        'message_template' => [
            'title' => 'Message Templates',
            'ask_for_review' => 'Ask for review',
            'new_product_newsletter' => 'New product newsletter',
            'repeat_customer' => 'Repeat customers with two more orders',
            'cod_order_confirmation' => 'COD order confirmation',
            'order_tracking' => 'Order tracking',
            'cancel_button_text' => 'Cancel',
            'add_new_template_button_text' => 'Add new template'
        ],
        'edit_message_template' => [
            'title' => 'Edit Message Templates',
            'form' => [
                'name' => 'Name',
                'message' => 'Message',
                'cancel_button_text' => 'Cancel',
                'save_button_text' => 'Save',
            ],
            'new_product_newsletter' => 'New product newsletter',
            'repeat_customer' => 'Repeat customers with two more orders',
            'cod_order_confirmation' => 'COD order confirmation',
            'order_tracking' => 'Order tracking',
            'cancel_button_text' => 'Cancel',
            'add_new_template_button_text' => 'Add new template'
        ]
    ],
];
