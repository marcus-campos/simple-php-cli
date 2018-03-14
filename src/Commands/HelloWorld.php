<?php

namespace App\Commands;


use Console\BaseCommand;
use Console\Contracts\ConsoleContract;

class HelloWorld extends BaseCommand implements ConsoleContract
{
    public function execute()
    {
        $this->util->output()->writeLn("Hello World!!!", "green");
    }
}
