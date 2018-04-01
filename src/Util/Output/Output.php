<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 13:27
 */

namespace Console\Util\Output;


use Console\Util\Output\Colors\Colors;

class Output
{
    private $colors;

    /**
     * Output constructor.
     */
    public function __construct()
    {
        $this->colors = new Colors();
    }

    /**
     *
     */
    public function breakLine()
    {
        print "\n";
        return $this;
    }

    /**
     * @param $string
     * @param null   $foregroundColor
     * @param null   $backgroundColor
     * @return $this
     */
    public function write($string, $foregroundColor = null, $backgroundColor = null)
    {
        print $this->getColoredString($string, $foregroundColor, $backgroundColor);
        return $this;
    }


    /**
     * @param $string
     * @param null   $foregroundColor
     * @param null   $backgroundColor
     * @return $this
     */
    public function writeLn($string, $foregroundColor = null, $backgroundColor = null)
    {
        $this->write($string."\n", $foregroundColor, $backgroundColor)->breakLine();
        return $this;
    }

    /**
     * @param $string
     * @param null   $foregroundColor
     * @param null   $backgroundColor
     * @return string
     */
    private function getColoredString($string, $foregroundColor = null, $backgroundColor = null)
    {
        $coloredString = "";

        // Check if given foreground color found
        if (isset($this->colors->getForegroundColors()[$foregroundColor])) {
            $coloredString .= "\033[" . $this->colors->getForegroundColors()[$foregroundColor] . "m";
        }
        // Check if given background color found
        if (isset($this->colors->getForegroundColors()[$backgroundColor])) {
            $coloredString .= "\033[" . $this->colors->getBackgroundColors()[$backgroundColor] . "m";
        }

        // Add string and end coloring
        $coloredString .= $string . "\033[0m";

        return $coloredString;
    }
}
