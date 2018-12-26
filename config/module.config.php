<?php 
namespace Acl;

use Acl\Listener\AclListener;
use Acl\Listener\Factory\AclListenerFactory;
use Acl\Controller\IndexController;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Router\Http\Segment;
use Acl\Service\AclService;
use Acl\Service\Factory\AclServiceFactory;


return [
    'router' => [
        'routes' => [
            'denied' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/acl[/:controller[/:action]]',
                    'defaults' => [
                        'controller' => 'index',
                        'action' => 'denied',
                    ],
                ],
            ],
        ],
    ],
    'acl' => [
        'guest' => [
            'denied' => ['view'],
        ],
    ],
    'controllers' => [
        'factories' => [
            IndexController::class => InvokableFactory::class,
        ],
        'aliases' => [
            'index' => IndexController::class,
        ],
    ],
    'service_manager' => [
        'aliases' => [
            'acl-listener' => AclListener::class,
            'acl-service' => AclService::class,
        ],
        'factories' => [
            AclListener::class => AclListenerFactory::class,
            AclService::class => AclServiceFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];