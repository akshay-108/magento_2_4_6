<?php

namespace Akshay\CollectionsQueries\Controller\Collection;

use Magento\Framework\App\Action\Context;

/**
 * collection query testing class
 */
class Query extends \Magento\Framework\App\Action\Action
{
    protected $modelQuery;

    public function __construct(
        Context $context,
        \Akshay\CollectionsQueries\Model\ProductCollection $modelQuery
    )
    {
        $this->modelQuery = $modelQuery;
        parent::__construct($context);
    }
    /**
     * query testing function
     */
    public function execute ()
    {
        // echo "Hello world";
        $this->modelQuery->productCollection();

        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
    }
}
