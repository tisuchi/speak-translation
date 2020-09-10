<?php

return [
    'title' => 'Analytics para Mensagens Automáticas',
    'tabs' => [
        'abandoned_cart' => [
            'title' => 'Carrinho Abandonado',
            'description' => 'Nota: Descrição para carrinho abandonado.',
            'table' => [
                'order' => 'Pedido',
                'client' => 'Nome do Cliente',
                'whatsapp_number' => 'Número de WhatsApp',
                'status' => 'Status',
                'tracking_number' => 'Código de Rastreio',
                'total' => 'Total',
                'date' => 'Data do Pedido',
                'status' => 'Status',
                'messagesentstatus' => 'Enviar Mensagem?',
                'message' => 'Mensagem',
            ],
        ],
        'boleto_reminder' => [
            'title' => 'Lembrete de Boleto',
            'description' => 'Nota: Lembrete de Boleto sem número de contato, serão automaticamente escondidos. Envie mensagens manuais rapidamente, utilizando o Web WhatsaApp ou utilizando o aplicativo de Desktop do WhatsApp. Clique na aba configurações para configurar.',
            'table' => [
                'order' => 'Pedido',
                'client' => 'Nome do CLiente',
                'whatsapp_number' => 'Número de WhatsApp',
                'status' => 'Status',
                'tracking_number' => 'Código de Rastreio',
                'total' => 'Total',
                'date' => 'Data do Pedido',
                'status' => 'Status',
                'messagesentstatus' => 'Enviar Mensagem?',
                'message' => 'Mensagem',
            ],
        ],
    ],
];
