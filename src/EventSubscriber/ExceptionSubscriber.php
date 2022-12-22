<?php

namespace App\EventSubscriber;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ExceptionSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            ExceptionEvent::class => 'onException',
        ];
    }

    public static function testApi ()
    {
        return [
            'kernel.exception' => 'onResponse',
        ];
    }
}
