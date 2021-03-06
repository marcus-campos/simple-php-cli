<?php

namespace Console;

use App\Config\Command;
use Console\Config\Command as CoreCommand;
use Console\Util\Util;

class Console
{
    /**
     * @var $util
     */
    private $util;

    private $argv;

    private $commands;

    /**
     * Console constructor.
     *
     * @param $argv
     */
    public function __construct ($argv)
    {
        $commands = new Command();
        $coreCommands = new CoreCommand();
        $this->util = new Util($argv);
        $this->commands = array_merge($coreCommands->getCommands(), $commands->getCommands());
        $this->argv = $argv;
    }

    /**
     *
     */
    public function command ()
    {
        $execCommand = false;
        $command = $this->util->args()->getCommands();

        foreach ($this->commands as $key => $value) {
            if ($command == $key) {
                $as = explode('@', $value['action']);
                $class = new $as[0]($this->argv);
                $action = $as[1];
                $class->$action();
                $execCommand = true;
            }
        }

        if (!$execCommand) {
            $this->util->output()->writeLn(
                "Oooops... Infelizmente este comando não está disponível",
                'red'
            );
            $this->util->output()->writeLn(
                "Execute o comando \"help\" para mais informações.",
                'red'
            );
        }
    }
}
