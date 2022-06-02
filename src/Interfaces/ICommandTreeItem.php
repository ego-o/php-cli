<?php

namespace Ego\Console\Interfaces;

interface ICommandTreeItem
{
    /**
     * @return ICommandTreeItem
     */
    public function getParent(): ICommandTreeItem;

    /**
     * @param ICommandTreeItem $command
     * @return mixed
     */
    public function setParent(ICommandTreeItem $command);

    /**
     * @return ICommandTreeItem[]
     */
    public function getChildren(): array;
}
