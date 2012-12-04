<?php

namespace Clinica;

return array(
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Clinica\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'crud' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/:controller[/:action][?id=:id]',
                    'defaults' => array(
                        'action' => 'index',
                        'id' => null
                    ),
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Clinica\Controller\Index' => 'Clinica\Controller\Index',
            'especie' => 'Clinica\Controller\Especie',
            'raca' => 'Clinica\Controller\Raca',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'bootstrapRow' => 'Core\Form\View\Helper\BootstrapRow',
            'FlashMessages' => 'Core\View\Helper\FlashMessages',
        )
    )
);