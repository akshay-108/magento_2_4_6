<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;

/**
 * helloworld testing class
 */
class Helloworld extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PencilInterface
     */
    protected $pencilInterface;

    /**
     * @param $context
     * @param $pencilInterface
     */
    public function __construct (
        Context $context,
        PencilInterface $pencilInterface
    )
    {
        $this->pencilInterface = $pencilInterface;
        parent::__construct($context);
    }

    /**
     * testing function
     */
    public function execute ()
    {
        echo "<pre>";
        // echo $this->pencilInterface->getPencilType();

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        var_dump($pencil);
    }
}
