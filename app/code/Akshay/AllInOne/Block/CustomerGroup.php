<?php

namespace Akshay\AllInOne\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\ResourceModel\Group\Collection;

class CustomerGroup extends Template
{
    protected $context;

    protected $customerGroupCollection;

    public function __construct(
        Context $context,
        Collection $customerGroupCollection,
        array $data = []
    )
    {
        $this->customerGroupCollection = $customerGroupCollection;
        return parent::__construct($context, $data);
    }

    /**
     * Get customer groups
     *
     * @return array
     */
    public function getCustomerGroups() {
        $customerGroups = $this->customerGroupCollection->toOptionArray();
        array_unshift($customerGroups, array('value'=>'', 'label'=>'Any'));
        return $customerGroups;
    }
}
