<?php

return [
    'baseUrl' => '/',
    'url' => function($page, $segment) {
        return implode('/', [rtrim($page->baseUrl, '/'), ltrim($segment, '/')]);
    },
    'production' => false,
    'collections' => [],
    'isSelected' => function ($page, $section) {
        return str_contains($page->getPath(), $section);
    },
    'active' => function($page, $section) {
        return $page->isSelected($section) ? 'active' : '';
    }
];
