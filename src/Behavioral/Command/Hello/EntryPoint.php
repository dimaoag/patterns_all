<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Hello;

class EntryPoint
{
    public function run(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();
//        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->cancel();
        $invoker->run();
//        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
