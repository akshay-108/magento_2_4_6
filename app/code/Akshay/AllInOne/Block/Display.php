<?php

namespace Akshay\AllInOne\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\Registry;

class Display extends Template
{
    protected $categoryCollectionFactory;

    protected $productRepository;

    protected $registry;

    public function __construct(
        Context $context,
        CollectionFactory $categoryCollectionFactory,
        ProductRepository $productRepository,
        Registry $registry,
        array $data = []
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->productRepository = $productRepository;
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Get category collection
     *
     * @param bool $isActive
     * @param bool|int $level
     * @param bool|string $sortBy
     * @param bool|int $pageSize
     * @return \Magento\Catalog\Model\ResourceModel\Category\Collection or array
     */
    public function getCategoryCollection($isActive = true, $level = false, $sortBy = false, $pageSize = false)
    {
        $collection = $this->categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*');

        // select only active categories
        if ($isActive) {
            $collection->addIsActiveFilter();
        }

        // select categories of certain level
        if ($level) {
            $collection->addLevelFilter($level);
        }

        // sort categories by some value
        if ($sortBy) {
            $collection->addOrderField($sortBy);
        }

        // select certain number of categories
        if ($pageSize) {
            $collection->setPageSize($pageSize);
        }

        return $collection;
    }

    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }
}
