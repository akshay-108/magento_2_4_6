<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

/**
 * pencil class get all type of pencils
 */
class Pencil implements PencilInterface
{
    /**
     * @var ColorInterface
     */
    protected $colorInterface;

    /**
     * @var SizeInterface
     */
    protected $sizeInterface;

    /**
     * @param $colorInterface
     * @param $sizeInterface
     */
    public function __construct (
        ColorInterface $colorInterface,
        SizeInterface $sizeInterface
    )
    {
        $this->colorInterface = $colorInterface;
        $this->sizeInterface = $sizeInterface;
    }

    public function getPencilType ()
    {
        return "Pencil has ".$this->colorInterface->getColor()." Color and ".$this->sizeInterface->getSize()." size";
    }
}