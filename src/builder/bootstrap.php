<?php

namespace [PLUGIN_NAMESPACE];

use YOOtheme\Builder;
use YOOtheme\Path;

require_once dirname(__DIR__) . '/vendor/autoload.php';

return [

    'events' => [

        'customizer.init' => [
            CustomizerListener::class => 'initCustomizer'
        ],

    ],

    'extend' => [

        Builder::class => function (Builder $builder) {
            $builder->addTypePath(Path::get('./*/element.json'));
        },

    ],

];
