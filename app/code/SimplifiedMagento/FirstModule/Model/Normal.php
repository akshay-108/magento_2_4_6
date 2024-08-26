<?php

namespace SimplifiedMagento\FirstModule\Model;

class Normal implements \SimplifiedMagento\FirstModule\Api\SizeInterface
{
    public function getSize ()
    {
        return "Normal";
    }
}