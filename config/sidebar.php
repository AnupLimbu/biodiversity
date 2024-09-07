<?php
 $current_route = $_SERVER['REQUEST_URI']??'';
return [
  'Product' =>
  [
    'icon' => 'fa-brands fa-product-hunt',
    'route' => '',
    'title' => 'Product',
    'class' => '',
    'visibility' => true,
    'permission' => true,
    'active' => false,
    'sub_link' =>
    [
      'create' =>
      [
        'icon' => 'fa-solid fa-plus',
        'route' => '/admin/products/create',
        'title' => 'Add Product',
        'visibility' => true,
        'permission' => true,
        'active' => '$current_route == "/admin/products/create"',
      ],
      'index' =>
      [
        'icon' => 'fa-solid fa-list',
        'route' => '/admin/products',
        'title' => 'List Products',
        'visibility' => true,
        'permission' => true,
        'active' => false,
      ],
    ],
  ],
  'ContactUs' =>
  [
    'icon' => 'fa-brands fa-product-hunt',
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
            'icon' => 'fa-brands fa-product-hunt',
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
  '[solid_auto_generated_sidebar]' => NULL,
];
