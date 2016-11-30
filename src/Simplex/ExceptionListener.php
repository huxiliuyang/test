<?php
namespace Simplex;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ExceptionListener implements EventSubscriberInterface
{
    public function onException(GetResponseForExceptionEvent $event)
    {
        $response = $event->getException();

        echo $response->getMessage();

    }

    public static function getSubscribedEvents(){

    }
}