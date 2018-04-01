<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 14:19
 */

namespace Console\Util\Input;


class Input
{
    /**
     * @return bool|string
     */
    public function readLine()
    {
        $line = readline();
        return $line;
    }
}
