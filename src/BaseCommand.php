<?php


namespace Console;


use Console\Util\Util;

abstract class BaseCommand
{
    protected $util;

    /**
     * Behat constructor.
     *
     * @param $argv
     */
    public function __construct($argv)
    {
        $this->util = new Util($argv);
    }
}
