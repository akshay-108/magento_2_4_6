<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class RedPencil implements \SimplifiedMagento\FirstModule\NotMagento\PencilInterface
{
    /**
     * return pencil type
     */
    public function getPencilType ()
    {
        return "Red Pencil";
    }
}