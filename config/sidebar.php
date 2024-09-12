<?php
 $current_route = $_SERVER['REQUEST_URI']??'';
return [
  'Project' =>
  [
    'icon' => 'fa-brands fa-product-hunt',
    'route' => '',
    'title' => 'Project',
    'class' => '',
    'visibility' => true,
    'permission' => true,
    'active' => false,
    'sub_link' =>
    [
      'create' =>
      [
        'icon' => 'fa-solid fa-plus',
        'route' => '/admin/projects/create',
        'title' => 'Add Project',
        'visibility' => true,
        'permission' => true,
        'active' => '$current_route == "/admin/projects/create"',
      ],
      'index' =>
      [
        'icon' => 'fa-solid fa-list',
        'route' => '/admin/projects',
        'title' => 'List Projects',
        'visibility' => true,
        'permission' => true,
        'active' => false,
      ],
    ],
  ],
  'ContactUs' =>
  [
    'icon' => 'fa-solid fa-address-book',
    'route' => '',
    'title' => 'ContactUs',
    'class' => '',
    'visibility' => true,
    'permission' => true,
    'active' => false,
    'sub_link' =>
    [
      'create' =>
      [
        'icon' => 'fa-solid fa-plus',
        'route' => '/admin/contact_us/create',
        'title' => 'Add ContactUs',
        'visibility' => true,
        'permission' => true,
        'active' => '$current_route == "/admin/contact_us/create"',
      ],
      'index' =>
      [
        'icon' => 'fa-solid fa-list',
        'route' => '/admin/contact_us',
        'title' => 'List Contacts',
        'visibility' => true,
        'permission' => true,
        'active' => false,
      ],
    ],
  ],'Team' =>
        [
            'icon' => 'fa-solid fa-user-plus',
            'route' => '',
            'title' => 'Team',
            'class' => '',
            'visibility' => true,
            'permission' => true,
            'active' =>$current_route=="/admin/teams/create" || $current_route=="/admin/teams" ,
            'sub_link' =>
                [
                    'create' =>
                        [
                            'icon' => 'fa-solid fa-plus',
                            'route' => '/admin/teams/create',
                            'title' => 'Add Team',
                            'visibility' => true,
                            'permission' => true,
                            'active' => $current_route == "/admin/teams/create",
                        ],
                    'index' =>
                        [
                            'icon' => 'fa-solid fa-list',
                            'route' => '/admin/teams',
                            'title' => 'List Teams',
                            'visibility' => true,
                            'permission' => true,
                            'active' => $current_route=="/admin/teams",
                        ],
                ],
        ],
    'Download' =>
        [
            'icon' => 'fa-brands fa-product-hunt',
            'route' => '',
            'title' => 'Download',
            'class' => '',
            'visibility' => false,
            'permission' => true,
            'active' => false,
            'sub_link' =>
                [
                    'create' =>
                        [
                            'icon' => 'fa-solid fa-plus',
                            'route' => '/admin/downloads/create',
                            'title' => 'Add Download',
                            'visibility' => true,
                            'permission' => true,
                            'active' => '$current_route == "/admin/downloads/create"',
                        ],
                    'index' =>
                        [
                            'icon' => 'fa-solid fa-list',
                            'route' => '/admin/downloads',
                            'title' => 'List Downloads',
                            'visibility' => true,
                            'permission' => true,
                            'active' => false,
                        ],
                ],
        ],
    'News&Events' =>
        [
            'icon' => 'fa-brands fa-product-hunt',
            'route' => '',
            'title' => 'NewsAndEvents',
            'class' => '',
            'visibility' => true,
            'permission' => true,
            'active' => false,
            'sub_link' =>
                [
                    'create' =>
                        [
                            'icon' => 'fa-solid fa-plus',
                            'route' => '/admin/news-and-events/create',
                            'title' => 'Add News & Events',
                            'visibility' => true,
                            'permission' => true,
                            'active' => '$current_route == "/admin/news-and-events/create"',
                        ],
                    'index' =>
                        [
                            'icon' => 'fa-solid fa-list',
                            'route' => '/admin/news-and-events',
                            'title' => 'List News & Events',
                            'visibility' => true,
                            'permission' => true,
                            'active' => false,
                        ],
                ],
        ],
    'Gallery' =>
        [
            'icon' => 'fa-brands fa-product-hunt',
            'route' => '',
            'title' => 'Gallery',
            'class' => '',
            'visibility' => true,
            'permission' => true,
            'active' => false,
            'sub_link' =>
                [
                    'create' =>
                        [
                            'icon' => 'fa-solid fa-plus',
                            'route' => '/admin/gallery/create',
                            'title' => 'Add Image',
                            'visibility' => true,
                            'permission' => true,
                            'active' => '$current_route == "/admin/gallery/create"',
                        ],
                    'index' =>
                        [
                            'icon' => 'fa-solid fa-list',
                            'route' => '/admin/gallery',
                            'title' => 'List Images',
                            'visibility' => true,
                            'permission' => true,
                            'active' => false,
                        ],
                ],
        ],
  '[solid_auto_generated_sidebar]' => NULL,
];
