<?php
/**
 * User: marcus-campos
 * Date: 28/02/18
 * Time: 13:26
 */

namespace Console\Util;


use Console\Util\Args\Args;
use Console\Util\Input\Input;
use Console\Util\Output\Output;
use Console\Util\Shell\Shell;
use Console\Util\String\Camelize;

class Util
{
    private $argv;

    /**
     * Util constructor.
     *
     * @param $argv
     */
    public function __construct($argv)
    {
        $this->argv = $argv;
    }

    /**
     * @return $this
     */
    public function args()
    {
        $args = new Args();
        return $args->arguments($this->argv);
    }

    /**
     * @return Output
     */
    public function output()
    {
        return new Output();
    }

    /**
     * @return Camelize
     */
    public function camelize()
    {
        return new Camelize();
    }

    /**
     * @return Shell
     */
    public function shell()
    {
        return new Shell();
    }

    /**
     * @return Input
     */
    public function input()
    {
        return new Input();
    }
}
