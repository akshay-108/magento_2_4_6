<?php

namespace Akshay\AllInOne\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class CurrentProductCategory extends Template
{
    protected $context;

    protected $registry;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    )
    {
        $this->context = $context;
        $this->registry = $registry;
        return parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getCurrentCategory()
    {
        return $this->registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }
}