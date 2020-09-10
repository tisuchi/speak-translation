<?php

return [
    'title' => 'Lembrete de Boleto Automático',
    'tabs' => [
        'settings' => [
            'title' => 'Configurações',
            'whatsapp_confirguration' => [
                'title' => 'Configurações do WhatsApp',
                'description' => 'Use lembretes de pagamento de boleto para induzir os seus clientes a realizarem o pagamento logo e evite deixar dinheiro na mesa.',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório).',
                    'country_code' => 'Código País Code',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'order_confirmation_template' => [
                'title' => 'Template de Lembrete de Boleto',
                'description' => 'Configure lembretes de pagamento de boleto para induzir os seus clientes a realizarem o pagamento logo e evite deixar dinheiro na mesa.',
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Lembrete de Boleto',
                    'disable_button' => 'Desabilitar',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Digite em minutos, o tempo de envio das mensagens automáticas. Deixe vazio para enviar automaticamente.',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
        'analytics' => [
            'title' => 'Analytics',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facilis nesciunt possimus? Adipisci aliquid animi, aspernatur cupiditate deleniti dolorum excepturi, expedita explicabo facere laudantium magni nostrum rem! Doloribus minus, reiciendis?',
            'table' => [
                'checkout' => 'Checkout',
                'date' => 'Data',
                'name' => 'Nome',
                'amount' => 'Quantidade',
                'status' => 'Status',
                'message' => 'Mensagem',
            ],
        ]
    ],
];
