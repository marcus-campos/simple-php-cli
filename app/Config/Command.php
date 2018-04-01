<?php
/**
 * User: marcus-campos
 * Date: 06/03/18
 * Time: 08:25
 */

namespace App\Config;


use App\Commands\HelloWorld;
use Console\Commands\Help;

class Command
{
    private $commands = [
        'hello:world' => [
            'action' => HelloWorld::class.'@execute',
            'params' => [],
            'description' => 'Hello world!!!'
        ],
        'help' => [
            'action' => Help::class.'@help',
            'description' => 'Lista de comandos'
        ]
    ];

    /**
     * @return array
     */
    public function getCommands(): array
    {
        return $this->commands;
    }

    /**
     * @param array $commands
     */
    public function setCommands(array $commands): void
    {
        $this->commands = $commands;
    }
}
