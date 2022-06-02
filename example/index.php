<?php

namespace Ego\ConsoleExample;

use Ego\Console;
use Ego\ConsoleExample\Commands\MainCommand;

require './../vendor/autoload.php';

$app = new Console\Application();
$app->setMainCommand(new MainCommand());
$app->handle();
