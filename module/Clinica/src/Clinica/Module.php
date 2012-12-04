<?php

namespace Clinica;

use Zend\Mvc\ModuleRouteListener,
    Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        //$e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '../../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'flashMessage' => function($sm) {
                    $flashmessenger = $sm->getServiceLocator()
                                         ->get('ControllerPluginManager')
                                         ->get('flashmessenger');

                    $message = new \Crud\View\Helper\FlashMessages;
                    $message->setFlashMessager($flashmessenger);
                    return $message ;
                }
            ),
        );
    }
}
