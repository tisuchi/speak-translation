<?php

return [
    'title' => 'Manual Boleto Reminder',
    'tabs' => [
        'carts' => [
            'title' => 'Carts',
            'description' => 'Note: Boleto Reminder without phone number are automatically hidden. Send manual messages faster by opening our app on your mobile phone browser, or by using WhatsApp Desktop app. Go to Settings tab to configure.',
            'table' => [
                'order' => 'Order',
                'client' => 'Client Name',
                'whatsapp_number' => 'WhatsApp Number',
                'status' => 'Status',
                'tracking_number' => 'Tracking Nuumber',
                'total' => 'Total',
                'date' => 'Date',
                'status' => 'Status',
                'messagesentstatus' => 'Send Message?',
                'message' => 'Message',
            ],
        ],
        'settings' => [
            'title' => 'Settings',
            'whatsapp_confirguration' => [
                'title' => 'WhatsApp Confirguration',
                'description' => 'Send messages from your computer using WhatsApp Web, or send them faster using the WhatsApp Desktop application. WhatsApp Desktop is an experimental feature, it may not work with all browsers. If your default browser doesn\'t work, please try Microsoft Edge / Safari / Firefox / Google Chrome.',
                'form' => [
                    'title' => 'Send messages from your computer using',
                    'web' => 'WhatsApp Web',
                    'app' => 'WhatsApp Desktop App',
                ],
            ],
            'abandoned_cart_template' => [
                'title' => 'Abandoned Cart Template',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Abandoned Cart Recovery',
                    'disable_button' => 'Disable',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Enter your delay time in hour format. Leave it empty for instant sending.',
                ],
            ],
            'save_button_text' => 'Save Changes'
        ],
        'templates' => [
            'title' => 'Message Templates',
            'abandoned_cart_template' => [
                'title' => 'Boleto Reminder Template',
                'description' => "
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione? \n
                                {first_name}
                                {product_name}
                                {variant}
                                {order_placed_date}
                                {total}
                                {boleto_link}
                            ",
                'preview' => 'Preview',
                'form1' => [
                    'title' => 'Template for 1st Message',
                ],
                'form2' => [
                    'title' => 'Template for 2nd Message',
                ],
                'form3' => [
                    'title' => 'Template for 3rd Message',
                ],
                'form4' => [
                    'title' => 'Template for 4th Message',
                ],
                'form5' => [
                    'title' => 'Template for 5th Message',
                ],
            ],
            'save_button_text' => 'Save Changes'
        ],
    ],
];
