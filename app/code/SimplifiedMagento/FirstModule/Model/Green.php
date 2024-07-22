<?php

namespace SimplifiedMagento\FirstModule\Model;

class Green implements \SimplifiedMagento\FirstModule\Api\ColorInterface
{
    public function getColor ()
    {
        return "Green";
    }
}