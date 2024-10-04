<?php

return [
    'Introduction' => 'docs/getting-started',
    'Gestion des sessions' => [
        'children' => [
            'Affichage des sessions' => 'docs/sessions-index',
            'Créer une session' => 'docs/sessions-create',
            'Annulation de session' => 'docs/sessions-cancel',
            'Restriction de session' => 'docs/sessions-restriction',
        ],
    ],
    'Gestion des tables' => [
        'children' => [
            'Créer une table' => 'docs/create-table',
            'Mettre à jour une table' => 'docs/edit-table',
            'Annuler une table' => 'docs/cancel-table',
        ],
    ],
    'Notifications DISCORD' => [
        'children' => [
            'Création de table' => 'docs/notifications/table-creation',
            'Inscriptions / Désinscriptions de joueurs' => 'docs/notifications/user-registration',
        ],
    ],
    'Inscription de joueur' => [
        'url' => 'docs/table-registration',
    ],
    'Desincription de joueur' => [
        'url' => 'docs/table-unregistration',
    ],
    'Espace admin' => [
        'children' => [
            'Rechercher un jeu' => 'docs/admin/search-game',
            'Créer un nouveau jeu' => 'docs/admin/create-game',
            'Editer un jeu' => 'docs/admin/edit-game',
        ],
    ],
];
