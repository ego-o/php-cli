<?php

namespace Ego\Console;

use Ego\Console\Interfaces\ICommand;
use Ego\Console\Interfaces\ICommandTreeItem;

abstract class Command implements ICommand, ICommandTreeItem
{
    protected $parentCommand = null;

    public function __construct(Command $parentCommand = null) {
        $this->parentCommand = $parentCommand;
    }

    abstract public function getName(): string;

    abstract public function getDescription(): string;

    abstract public function execute();

    public function defineArguments(): array
    {
        return [];
    }

    public function defineOptions(): array
    {
        return [];
    }


    public function getChildren(): array
    {
        return [];
    }


    public function getParent(): Command
    {
        return $this->parentCommand;
    }


    public function setParent(ICommandTreeItem $command)
    {
        $this->parentCommand = $command;
    }
}
