<?php

namespace SimplifiedMagento\FirstModule\Model;
class Big implements \SimplifiedMagento\FirstModule\Api\SizeInterface
{
    public function getSize ()
    {
        return "Big";
    }
}
