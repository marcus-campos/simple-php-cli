<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 13:37
 */

namespace Console\Util\String;


class Camelize
{
    /**
     * @param $input
     * @param string $separator
     * @return mixed
     */
    public function format($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords(strtolower($input), $separator));
    }
}
