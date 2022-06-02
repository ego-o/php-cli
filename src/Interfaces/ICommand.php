<?php

namespace Ego\Console\Interfaces;

interface ICommand
{
    public function getName(): string;
    public function getDescription(): string;
    public function defineArguments();
    public function defineOptions();
    public function execute();
}
