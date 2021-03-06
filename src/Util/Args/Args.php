<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 14:37
 */

namespace Console\Util\Args;


class Args
{
    private $ret;
    /**
     * @param $args
     * @return $this
     */
    public function arguments($args)
    {
        array_shift($args);

        $ret = [
            'commands' => [],
            'options' => [],
            'flags'    => [],
            'arguments' => [],
        ];

        foreach ($args as $arg) {

            //Flags
            if(substr($arg, 0, 2) === '--') {
                $flag = explode('=', $arg);
                $flag[0] = str_replace('--', '', $flag[0]);

                if(isset($flag[1]) and !empty($flag[1])) {
                    $ret['flags'][$flag[0]] = $flag[1];
                    continue;
                }

                $ret['flags'][] = $flag[0];
                continue;
            }
            //Options
            if(substr($arg, 0, 1) === '-') {
                $option = explode('=', $arg);
                $option[0] = str_replace('-', '', $option[0]);

                if(isset($option[1]) and !empty($option[1])) {
                    $ret['options'][$option[0]] = $option[1];
                    continue;
                }

                $ret['options'][] = $option[0];
                continue;
            }
            //Command
            if ($arg === $args[0]) {
                $ret['commands'] = $arg;
                continue;
            }

            $ret['arguments'][] = $arg;
        }

        $this->ret = $ret;

        return $this;
    }

    /**
     * @param $name
     * @return int|null|string
     */
    public function getCommand ($name)
    {
        foreach($this->ret['commands'] as $key => $value) {
            if($key == $name) {
                return $value ? $value : $key;
            }
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getCommands ()
    {
        return $this->ret['commands'];
    }

    /**
     * @param $name
     * @return int|null|string
     */
    public function getOption ($name)
    {
        foreach($this->ret['options'] as $key => $value) {
            if($key == $name) {
                return $value ? $value : $key;
            }
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getOptions ()
    {
        return $this->ret['options'];
    }

    /**
     * @param $name
     * @return int|null|string
     */
    public function getFlag ($name)
    {
        foreach($this->ret['flags'] as $key => $value) {
            if($key === $name) {
                return $value;
            }

            if($value === $name) {
                return $value;
            }
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getFlags ()
    {
        return $this->ret['flags'];
    }

    /**
     * @return mixed
     */
    public function getArguments ()
    {
        return $this->ret['arguments'];
    }
}
