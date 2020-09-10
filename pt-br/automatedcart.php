<?php

return [
    'title' => 'Configurações de Carrinhos Abandonados Automáticos',
    'tabs' => [
        'abandoned' => [
            'title' => 'Carrinho Abandonado',
            'whatsapp_confirguration' => [
                'title' => 'Configuração do WhatsApp',
                'description' => 'Use mensagens automáticas para converter clientes que abandonaram as compras.',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório).',
                    'country_code' => 'Código País',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'abandoned_cart_template' => [
                'title' => 'Template de Carrinho Abanandonado',
                'description' => "
                    Configure suas mensagens automáticas para converter clientes que abandonaram as compras.

                    {first_name}
                    {checkout_link}
                    {product_name}
                    {variant}
                    {order_placed_date}
                    {total}
                ",
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Recuperação de Carrinho Abandonado',
                    'disable_button' => 'Desabilitar',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Digite em minutos, o tempo de envio das mensagens automáticas. Deixe vazio para enviar automaticamente.',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
        'boleto' => [
            'title' => 'Lembrete de Boleto',
            'whatsapp_confirguration' => [
                'title' => 'Configuração WhatsApp',
                'description' => 'Use lembretes de pagamento de boleto para induzir os seus clientes a realizarem o pagamento logo e evite deixar dinheiro na mesa.',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório).',
                    'country_code' => 'Código País',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'order_confirmation_template' => [
                'title' => 'Template de Lembrete de Boleto',
                'description' => "
                    Configure lembretes de pagamento de boleto para induzir os seus clientes a realizarem o pagamento logo e evite deixar dinheiro na mesa.

                    {first_name}
                    {boleto_link}
                    {product_name}
                    {variant}
                    {order_placed_date}
                    {total}
                ",
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
        'cancle' => [
            'title' => 'Pedidos Cancelados',
            'whatsapp_confirguration' => [
                'title' => 'Configuração WhatsApp',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione?',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório).',
                    'country_code' => 'Código País',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'canceled_template' => [
                'title' => 'Template de Pedidos Cancelados',
                'description' => "
                    Precisa poupar tempo? Crie um fluxo de mensagens e dispare para os clientes informando

                    {first_name}
                    {tracking_number}
                    {product_name}
                    {variant}
                    {order_placed_date}
                    {total}
                ",
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Template de Pedidos Cancelados',
                    'disable_button' => 'Desabilitar',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Digite em minutos, o tempo de envio das mensagens automáticas. Deixe vazio para enviar automaticamente.',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
        'complete' => [
            'title' => 'Pedidos Finalizados',
            'whatsapp_confirguration' => [
                'title' => 'Configuração WhatsApp',
                'description' => 'Ansiedade em receber o pedido logo é muito comum entre os clientes. Suavize as preocupações deles enviando atualizações sobre o status do pedido.',
                'form' => [
                    'title' => 'Número WhatsApp',
                    'details' => 'Incluímos um link para o número de suporte do WhatsApp em cada mensagem (obrigatório).',
                    'country_code' => 'Código País',
                    'whatsapp_number' => 'Número WhatsApp',
                ],
            ],
            'complated_template' => [
                'title' => 'Template de Pedidos Finalizados',
                'description' => "
                    Configure mensagens com atualizações sobre o status do pedido.

                    {first_name}
                    {tracking_number}
                    {product_name}
                    {variant}
                    {order_placed_date}
                    {total}
                ",
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Template de Pedidos Finalizados',
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
