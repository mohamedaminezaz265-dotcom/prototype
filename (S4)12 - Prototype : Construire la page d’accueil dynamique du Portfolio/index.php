<?php

$projets = [
    [
        'titre' => 'World Guide',
        'description' => 'Discover the world with World Guide.',
        'statut' => 'termine'
    ],
    [
        'titre' => 'Deviner un nombre entre 1 et 100',
        'description' => 'Un jeu pour deviner un nombre.',
        'statut' => 'termine'
    ],
    [
        'titre' => 'Mon blog',
        'description' => 'Un blog personnel.',
        'statut' => 'en cours'
    ]
];

$links = [
    ['url' => '#about', 'label' => 'a propos'],
    ['url' => '#project', 'label' => 'projets'],
    ['url' => '#contact', 'label' => 'contact']
];

$contacts = [
    ['label' => 'GitHub', 'url' => '#'],
    ['label' => 'Email', 'url' => '#'],
    ['label' => 'LinkedIn', 'url' => '#']
];

require 'index-template.php';
