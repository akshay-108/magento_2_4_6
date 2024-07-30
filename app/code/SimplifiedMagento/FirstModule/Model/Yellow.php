<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Brightness;

class Yellow implements \SimplifiedMagento\FirstModule\Api\ColorInterface
{
    protected $brightness;

    public function __construct (
        Brightness $brightness
    )
    {
        $this->brightness = $brightness;
    }
    
    public function getColor ()
    {
        return "Yellow";
    }
}