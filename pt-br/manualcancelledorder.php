<?php

return [
    'title' => 'Pedidos Cancelados - Mensagem Manual',
    'tabs' => [
        'carts' => [
            'title' => 'Pedidos Cancelados',
            'description' => 'Nota: Pedidos Cancelados sem número de contato, serão automaticamente escondidos. Envie mensagens manuais rapidamente, utilizando o Web WhatsaApp ou utilizando o aplicativo de Desktop do WhatsApp. Clique na aba configurações para configurar.',
            'table' => [
                'order' => 'Pedido',
                'client' => 'Nome do Cliente',
                'whatsapp_number' => 'Número WhatsApp',
                'status' => 'Status',
                'tracking_number' => 'Código de Rastreio',
                'total' => 'Total',
                'date' => 'Data',
                'status' => 'Status',
                'messagesentstatus' => 'Enviar Mensagem?',
                'message' => 'Mensagem',
                'payment_gateway' => 'Gateway de Pagamento',
            ],
        ],
        'settings' => [
            'title' => 'Configurações',
            'whatsapp_confirguration' => [
                'title' => 'Configuração WhatsApp',
                'description' => 'Envie mensagens do seu computador utilizando o WhatsApp Web, ou envie rapidamente utilizando o aplicativo WhatsApp Desktop. O WhatsApp Desktop é um aplicativo que pode não funcionar com todos os browsers. Se o navegador padrão não funcionar, por favor, teste com os navegadores Microsoft Edge / Safari / Firefox / Google Chrome.',
                'form' => [
                    'title' => 'Envie mensagens do seu computador utilizando',
                    'web' => 'WhatsApp Web',
                    'app' => 'WhatsApp Desktop App',
                ],
            ],
            'abandoned_cart_template' => [
                'title' => 'Template de Carrinho Abanadonado',
                'description' => 'Precisa poupar tempo? Crie um fluxo de mensagens automáticas e dispare para os clientes.',
                'preview' => 'Preview',
                'form' => [
                    'title' => 'Recuperação de Carrinho Abandonado',
                    'disable_button' => 'Desabilitar',
                    'delay' => 'Delay',
                    'delay_help_text' => 'Digite em horas, o tempo de envio das mensagens automáticas. Deixe vazio para enviar automaticamente.',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
        'templates' => [
            'title' => 'Template de Mensagens',
            'abandoned_cart_template' => [
                'title' => 'Template de Pedidos Confirmados',
                'description' => "
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, aperiam aut commodi dignissimos, ea harum itaque, iure maxime natus neque officia quaerat quam quos rem rerum veniam. Quaerat, ratione? \n
                                {first_name}
                                {product_name}
                                {variant}
                                {order_placed_date}
                                {total}
                            ",
                'preview' => 'Preview',
                'form1' => [
                    'title' => 'Template da 1ª Mensagem',
                ],
                'form2' => [
                    'title' => 'Template da 2ª Mensagem',
                ],
                'form3' => [
                    'title' => 'Template da 3ª Mensagem',
                ],
                'form4' => [
                    'title' => 'Template da 4ª Mensagem',
                ],
                'form5' => [
                    'title' => 'Template da 5ª Mensagem',
                ],
            ],
            'save_button_text' => 'Salvar Mudanças'
        ],
    ],
];
