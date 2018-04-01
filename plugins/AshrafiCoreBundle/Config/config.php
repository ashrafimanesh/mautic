<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 3/29/18
 * Time: 8:21 PM.
 */

return [
    'name'        => 'ashrafi core plugin',
    'description' => 'ashrafi core plugin',
    'version'     => '1.0',
    'author'      => 'ashrafi',
    'services'    => [
        'events' => [
            'ashrafi.core.subscriber' => [
                'class'     => 'MauticPlugin\AshrafiCoreBundle\EventListener\CoreSubscriber',
                'arguments' => [
                    'mautic.helper.bundle',
                    'mautic.helper.menu',
                    'mautic.helper.user',
                    'templating.helper.assets',
                    'mautic.helper.core_parameters',
                    'security.context',
                    'mautic.user.model.user',
                ],
            ],
        ],
        'helpers'=> [
        ],
        'others'=> [
//            'templating.engine.php.class'       => 'MauticPlugin\AshrafiCoreBundle\Templating\Engine\PhpEngine',
//            'debug.templating.engine.php.class' => 'MauticPlugin\AshrafiCoreBundle\Templating\Engine\PhpEngine',
        ],
    ],
];
