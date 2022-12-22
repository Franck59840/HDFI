<?php

namespace App\EventSubscriber;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
class ExceptionSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            ExceptionEvent::class => 'onException',
        ];
    }
    
    public function onException(ExceptionEvent $event)
        {
            $exception = $event->getThrowable();
            $response = new Response();
            $response->setContent(json_encode([
                'error' => $exception->getMessage(),
            ]));
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
            $response->headers->set('Content-Type', 'application/json');
            $event->setResponse($response);
        }
 }
