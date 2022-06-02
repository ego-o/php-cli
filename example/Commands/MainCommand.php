<?php

namespace Ego\ConsoleExample\Commands;

use Ego\Console;

class MainCommand extends Console\Command
{
    public function getName(): string
    {
        return "Git";
    }


    public function getDescription(): string
    {
        return "Collection - это базовый интерфейс, который покрывает функциональность общую для всех 
            структур данных в этой библиотеке. Он гарантирует, что все структуры обходимы, счётный и 
            могут быть преобразованы в JSON с помощью функции json_encode().";
    }


    public function execute()
    {
        echo 'main';
    }


    public function getChildren(): array
    {
        return [
            new FirstChildCommand($this),
            new SecondChildCommand($this)
        ];
    }

    /*
    public function defineArguments($argument)
    {
        $first = $argument->string('site_domain')
            ->description('Доменное имя сайта')
            ->validator(function ($data) {
                if (!filter_var($data, FILTER_VALIDATE_DOMAIN)) {
                    return 'Домен может содержать только ...';
                }
                return '';
            });

        $second = $argument->string('root')
            ->description('Корневая папка сайта')
            ->default('/')
            ->validator(function ($arg) {
                return filter_var($arg, FILTER_VALIDATE_URL);
            });

        return [$first, $second];
    }


    public function defineOptions($option)
    {
        $first = $option->boolean('includeUpload')
            ->description('Добавить в бэкап папку upload')
            ->long('include-upload')
            ->short('u')
            ->default(false);
    }
    */

}
