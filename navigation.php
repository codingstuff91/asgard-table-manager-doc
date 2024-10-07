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
            'Créer une table' => 'docs/table/create',
            'Mettre à jour une table' => 'docs/table/edit',
            'Annuler une table' => 'docs/table/cancel',
        ],
    ],
    'Inscriptions / Desinscriptions' => [
        'children' => [
            'S\'inscrire à une table' => 'docs/user/registration',
            'Desinscription d\'une table' => 'docs/user/unregistration',
        ],
    ],
    'Notifications DISCORD' => [
        'children' => [
            'Création de table' => 'docs/notifications/table-creation',
            'Mise à jour de table' => 'docs/notifications/table-update',
            'Inscriptions / Désinscriptions de joueurs' => 'docs/notifications/user-registration',
        ],
    ],
    'Espace admin' => [
        'children' => [
            'Rechercher un jeu' => 'docs/admin/search-game',
            'Créer un nouveau jeu' => 'docs/admin/create-game',
            'Editer un jeu' => 'docs/admin/edit-game',
        ],
    ],
];
