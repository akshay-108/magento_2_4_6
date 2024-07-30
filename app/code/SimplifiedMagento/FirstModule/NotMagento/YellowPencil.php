<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class YellowPencil implements \SimplifiedMagento\FirstModule\NotMagento\PencilInterface
{
    /**
     * return pencil type
     */
    public function getPencilType ()
    {
        return "Yellow Pencil";
    }
}