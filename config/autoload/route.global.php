<?php
/**
 * Global Metadata
 *
 */
return array(

    'router' => array(
        'routes' => array(
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),

            'resume' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/resume',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'resume',

                    ),
                ),
            ),

            'contact' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/contact',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'contact',

                    ),
                ),
            ),

            'blog' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/blog',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'blog',

                    ),
                ),
            ),


            'showcase' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/showcase',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'showcase',

                    ),
                ),
            ),



            'callback' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/callback',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'callback',

                    ),
                ),
            ),

            'apps' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/apps',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'apps',

                    ),
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'view' => array(
                        'type' => 'segment',
                        'may_terminate' => true,
                        'options' => array(
                            'route' => '/:appname',
                            'constraints' => array(
                                'articleid' => '[a-zA-Z0-9_-]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'apps',
                                'code' => 0,
                            ),
                        ),
                    ),
                ),
            ),





            'error' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/error',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'error',
                    ),
                ),
            ),

        ),
    ),
);
