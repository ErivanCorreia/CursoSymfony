<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 09/06/2018
 * Time: 14:28
 */

namespace AppBundle\Service;


use AppBundle\Event\InscricaoEvent;
use Domain\Model\Inscricao;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class EventDispatcherService
{

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * EventDispatcherService constructor.
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function dispatchInscricaoEvent(Inscricao $inscricao)
    {
        $incricaoEvent = new InscricaoEvent($inscricao);
        $this->eventDispatcher->dispatch(InscricaoEvent::INSCRICAO, $incricaoEvent);
    }

}