<?php

return [
    'Introduction' => 'docs/getting-started',
    'Gestion des sessions' => [
        'children' => [
            'Affichage des sessions' => 'docs/sessions-index',
            'Créer une session' => 'docs/sessions-create',
        ],
    ],
    'Gestion des tables' => [
        'children' => [
            'Créer une table' => 'docs/create-table',
            'Mettre à jour une table' => 'docs/edit-table',
            'Annuler une table' => 'docs/cancel-table',
        ],
    ],
    'Inscription de joueur' => [
        'url' => 'docs/table-registration',
    ],
    'Desincription de joueur' => [
        'url' => 'docs/table-unregistration',
    ],
];
