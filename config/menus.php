<?php
return [
    [
        'title' => 'Category',
        'name' => 'category',
        'route' => 'admin.categories.index',
        'children' => [
            [
                'title' => 'List Category',
                'name' => 'index',
                'route' => 'admin.categories.index',
            ],
            [
                'title' => 'Create Category',
                'name' => 'create',
                'route' => 'admin.categories.create',
            ],
            [
                'title' => 'Edit Category',
                'name' => 'edit',
            ]

        ],
    ],  [
        'title' => 'Blog',
        'name' => 'blog',
        'route' => 'admin.blogs.index',
        'children' => [
            [
                'title' => 'List Blog',
                'name' => 'index',
                'route' => 'admin.blogs.index',
            ],
            [
                'title' => 'Create Blog',
                'name' => 'create',
                'route' => 'admin.blogs.create',
            ],
            [
                'title' => 'Edit Blog',
                'name' => 'edit',
            ]

        ],
    ]
];