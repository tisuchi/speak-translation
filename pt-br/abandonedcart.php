<?php

return [
    'title' => 'Mensagens Automáticas de Carrinho Abandonado',
    'tabs' => [
        'settings' => [
            'title' => 'Configurações',
            'whatsapp_confirguration' => [
                'title' => 'Configuração de WhatsApp',
                'description' => 'Precisa poupar tempo? Crie um fluxo de mensagens automáticas e dispare para os clientes.',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório). ',
                    'country_code' => 'Código País',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'abandoned_cart_template' => [
                'title' => 'Template de Carrinho Abandonado',
                'description' => 'Precisa poupar tempo? Crie um fluxo de mensagens automáticas e dispare para os clientes.',
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Abandoned Cart Recovery',
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
