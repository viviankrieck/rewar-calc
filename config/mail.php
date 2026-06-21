<?php


return [
    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            // ... configurações existentes
        ],

        // ADICIONE ESTE BLOCO ABAIXO:
        'brevo' => [
            'transport' => 'brevo',
        ],
    ],
];
