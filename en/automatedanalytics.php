<?php

return [
    'title' => 'Analytics for Automated Messages',
    'tabs' => [
        'abandoned_cart' => [
            'title' => 'Abandoned Cart',
            'description' => 'Note: As usual description for abandoned cart.',
            'table' => [
                'order' => 'Order',
                'client' => 'Client Name',
                'whatsapp_number' => 'WhatsApp Number',
                'status' => 'Status',
                'tracking_number' => 'Tracking Nuumber',
                'total' => 'Total',
                'date' => 'Order date',
                'status' => 'Status',
                'messagesentstatus' => 'Send Message?',
                'message' => 'Message',
            ],
        ],
        'boleto_reminder' => [
            'title' => 'Boleto Reminder',
            'description' => 'Note: Boleto Reminder without phone number are automatically hidden. Send manual messages faster by opening our app on your mobile phone browser, or by using WhatsApp Desktop app. Go to Settings tab to configure.',
            'table' => [
                'order' => 'Order',
                'client' => 'Client Name',
                'whatsapp_number' => 'WhatsApp Number',
                'status' => 'Status',
                'tracking_number' => 'Tracking Nuumber',
                'total' => 'Total',
                'date' => 'Order date',
                'status' => 'Status',
                'messagesentstatus' => 'Send Message?',
                'message' => 'Message',
            ],
        ],
    ],
];
