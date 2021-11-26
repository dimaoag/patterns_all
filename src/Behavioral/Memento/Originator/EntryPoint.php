<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Originator;

class EntryPoint
{
    public function run(): void
    {
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "\n";
        $caretaker->showHistory();

        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();

        echo "\nClient: Once more!\n\n";
        $caretaker->undo();

        /*
         * Originator: My initial state is: Super-duper-super-puper-super.

            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: srGIngezAEboNPDjBkuvymJKUtMSFX

            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: UwCZQaHJOiERLlchyVuMbXNtpqTgWF

            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: incqsdoJXkbDUuVOvRFYyKBgfzwZCQ

            Caretaker: Here's the list of mementos:
            2018-06-04 14:50:39 / (Super-dup...)
            2018-06-04 14:50:39 / (srGIngezA...)
            2018-06-04 14:50:39 / (UwCZQaHJO...)

            Client: Now, let's rollback!

            Caretaker: Restoring state to: 2018-06-04 14:50:39 / (UwCZQaHJO...)
            Originator: My state has changed to: UwCZQaHJOiERLlchyVuMbXNtpqTgWF

            Client: Once more!

            Caretaker: Restoring state to: 2018-06-04 14:50:39 / (srGIngezA...)
            Originator: My state has changed to: srGIngezAEboNPDjBkuvymJKUtMSFX
         */
    }
}
