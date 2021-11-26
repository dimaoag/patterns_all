<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Ticket;

class EntryPoint
{
    public function run(): void
    {
        $ticket = new Ticket();

        // open the ticket
        $ticket->open();
        $openedState = $ticket->getState();

        $memento = $ticket->saveToMemento();

        // assign the ticket
        $ticket->assign();

        // now restore to the opened state, but verify that the state object has been cloned for the memento
        $ticket->restoreFromMemento($memento);
    }
}
