<?php

namespace Ego\Console;

class Application
{
    protected $mainCommand = null;


    public function setMainCommand(Command $command) {
        $this->mainCommand = $command;
    }


    public function handle($arguments = null)
    {
        global $argv;
        if ($arguments === null) {
            $arguments = $argv;
        }

        if (gettype($arguments) === 'string') {

        }
        if (gettype($arguments) === 'array') {

        }


        echo 'arguments:\n';
        var_dump($arguments);

        //throw new \Exception('Invalid type of argument "argv"');
    }
}
