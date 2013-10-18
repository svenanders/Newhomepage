<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Application',
        'ZfcBase',
        'ZfcTwig',
        //'ScnSocialAuth',
        'ZfcUser',
        'DluPhpSettings',
        'ZF2NetteDebug',
        'ZendDeveloperTools',
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineMongoODMModule',
        'Users',
        'News',
        ),
    'module_listener_options' => array(
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}.php'),
        'module_paths' => array(
            'module',
            'vendor'
            )
        )
    );
