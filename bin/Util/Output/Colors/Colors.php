<?php
/**
 * User: marcus-campos
 * Date: 09/03/18
 * Time: 13:25
 */

namespace Console\Util\Output\Colors;


class Colors
{
    private $foregroundColors = [];

    private $backgroundColors = [];

    public function __construct()
    {
        // Set up shell colors
        $this->foregroundColors['black'] = '0;30';
        $this->foregroundColors['dark_gray'] = '1;30';
        $this->foregroundColors['blue'] = '0;34';
        $this->foregroundColors['light_blue'] = '1;34';
        $this->foregroundColors['green'] = '0;32';
        $this->foregroundColors['light_green'] = '1;32';
        $this->foregroundColors['cyan'] = '0;36';
        $this->foregroundColors['light_cyan'] = '1;36';
        $this->foregroundColors['red'] = '0;31';
        $this->foregroundColors['light_red'] = '1;31';
        $this->foregroundColors['purple'] = '0;35';
        $this->foregroundColors['light_purple'] = '1;35';
        $this->foregroundColors['brown'] = '0;33';
        $this->foregroundColors['yellow'] = '1;33';
        $this->foregroundColors['light_gray'] = '0;37';
        $this->foregroundColors['white'] = '1;37';

        $this->backgroundColors['black'] = '40';
        $this->backgroundColors['red'] = '41';
        $this->backgroundColors['green'] = '42';
        $this->backgroundColors['yellow'] = '43';
        $this->backgroundColors['blue'] = '44';
        $this->backgroundColors['magenta'] = '45';
        $this->backgroundColors['cyan'] = '46';
        $this->backgroundColors['light_gray'] = '47';
    }

    /**
     * @return array
     */
    public function getForegroundColors(): array
    {
        return $this->foregroundColors;
    }

    /**
     * @param array $foregroundColors
     */
    public function setForegroundColors(array $foregroundColors): void
    {
        $this->foregroundColors = $foregroundColors;
    }

    /**
     * @return array
     */
    public function getBackgroundColors(): array
    {
        return $this->backgroundColors;
    }

    /**
     * @param array $backgroundColors
     */
    public function setBackgroundColors(array $backgroundColors): void
    {
        $this->backgroundColors = $backgroundColors;
    }
}
