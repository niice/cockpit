<?php

return [

    # cockpit session name
    'app.name' => 'Content Manager',

    # define additional groups
    'groups' => [
        'editor' => [
            '$admin' => false,
            '$vars' => [
                'finder.path' => '/storage/upload'
            ],
            'cockpit' => [
                'backend' => true,
                'finder' => true
            ],
            'collections' => [
                'manage' => true
            ]
        ]
    ],

];