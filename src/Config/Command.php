<?php
/**
 * User: marcus-campos
 * Date: 06/03/18
 * Time: 08:25
 */

namespace Console\Config;

use Console\Commands\Help;
use Console\Commands\Command as ConsoleCommand;

class Command
{
    private $commands =  [
        'make:command' => [
            'action' => ConsoleCommand::class.'@makeCommand',
            'params' => [
                'nome_comando'
            ],
            'description' => 'Cria um novo comando para ser executado pelo console: Ex: make:command EnviarAlertas'
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
