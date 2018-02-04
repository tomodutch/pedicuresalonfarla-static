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
    'active' => function($page, ...$sections) {
        foreach ($sections as $section) {
            if ($page->isSelected($section)) {
                return 'active';
            }
        }

        return '';
    }
];
