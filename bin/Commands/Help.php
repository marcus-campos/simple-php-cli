<?php

namespace Console\Commands;

use Console\BaseCommand;
use App\Config\Command;
use Console\Config\Command as CoreCommand;
use Console\Contracts\ConsoleContract;

class Help extends BaseCommand implements ConsoleContract
{

    private $commands;

    /**
     * Help constructor.
     *
     * @param $argv
     */
    public function __construct($argv)
    {
        $commands = new Command();
        $coreCommands = new CoreCommand();
        $this->commands = array_merge($commands->getCommands(), $coreCommands->getCommands());
        parent::__construct($argv);
    }

    /**
     *
     */
    public function help()
    {
        $text = "Lista de comandos: \n\n";
        foreach ($this->commands as $key => $value) {
            if(isset($value['params'])) {
                $params = "\n    Parâmetros:";

                foreach ($value['params'] as $param) {
                    $params .=  " <" .$param .">";
                }

                $text .= "  " . $key .
                    $params.
                    "\n    Descrição: " . $value['description'] .
                    "\n\n";
            }
            else {
                $text .= "  " . $key .
                    "\n     Descrição: " . $value['description'] . "\n\n";
            }
        }

        $this->util->output()->write($text, 'green');
    }
}
