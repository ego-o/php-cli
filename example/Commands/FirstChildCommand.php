<?php

namespace Ego\ConsoleExample\Commands;

use Ego\Console;

class FirstChildCommand extends Console\Command
{
    public function getName(): string
    {
        return 'first';
    }

    public function getDescription(): string
    {
        return 'First child command';
    }

    public function execute()
    {
        echo 'hi';
    }
}
