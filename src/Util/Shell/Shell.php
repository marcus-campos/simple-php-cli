<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 14:02
 */

namespace Console\Util\Shell;


class Shell
{
    /**
     * @param $cmd
     * @return string
     */
    public function exec($cmd)
    {
        return shell_exec($cmd);
    }
}
