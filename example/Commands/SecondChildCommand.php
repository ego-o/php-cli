<?php

namespace Ego\ConsoleExample\Commands;

use Ego\Console;

class SecondChildCommand extends Console\Command
{
    public function getName(): string
    {
        return 'second';
    }

    public function getDescription(): string
    {
        return 'Second child command';
    }

    public function execute()
    {
        echo 'hi 2';
    }
}
