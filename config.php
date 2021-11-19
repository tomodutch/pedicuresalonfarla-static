<?php

return [
    'production' => false,
    'collections' => [],
    'baseUrl' => '',
    'url' => function($page, $segment) {
        $trailing = '';
        if (str_contains($segment, '.') === false) {
            $trailing = '/';
        }

        return implode('/', [rtrim($page->baseUrl, '/'), ltrim($segment, '/')]);
    },
    'title' => function($page) {
        $default = 'Pedicuresalon Farla';

        switch (true) {
            case $page->isSelected('over-mij'):
                    return "$default - over pedicuresalon Farla";
                break;
            case $page->isSelected('prijslijst'):
                    return "$default - prijslijst";
                break;
            case $page->isSelected('behandeling/pedicure-basis-all-in'):
                return "$default - Pedicure basis all in";
            break;
            case $page->isSelected('behandeling/pedicure-deluxe'):
                    return "$default - Pedicure deluxe";
                break;
            case $page->isSelected('behandeling/pedicure-la-couleur'):
                return "$default - Pedicure la couleur";
            break;
            case $page->isSelected('behandeling/gel-nail-repair'):
                return "$default - Gail nail repair";
            break;
            case $page->isSelected('behandeling/body-sugaring'):
                return "$default - Body sugaring";
            break;
            default:
                return $default;
        }
    },
    'description' => function($page) {
        $default = 'Gediplomeerd pedicure aangesloten bij ProVoet met meer dan 10 jaar ervaring gevestigd in Sint-maartensdijk';
        
        switch (true) {
            // case $page->isSelected('over-mij'):
            //         return "$default - over pedicuresalon Farla";
            //     break;
            // case $page->isSelected('prijslijst'):
            //         return "$default - prijslijst";
            //     break;
            // case $page->isSelected('behandeling/pedicure-basis-all-in'):
            //     return "$default - Pedicure basis all in";
            // break;
            // case $page->isSelected('behandeling/pedicure-deluxe'):
            //         return "$default - Pedicure deluxe";
            //     break;
            // case $page->isSelected('behandeling/pedicure-la-couleur'):
            //     return "$default - Pedicure la couleur";
            // break;
            // case $page->isSelected('behandeling/gel-nail-repair'):
            //     return "$default - Gail nail repair";
            // break;
            // case $page->isSelected('behandeling/body-sugaring'):
            //     return "$default - Body sugaring";
            // break;
            default:
                return $default;
        }
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
