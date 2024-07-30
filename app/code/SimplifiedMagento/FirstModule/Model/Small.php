<?php

namespace SimplifiedMagento\FirstModule\Model;

class Small implements \SimplifiedMagento\FirstModule\Api\SizeInterface
{
    public function getSize ()
    {
        return "Small";
    }
}