<?php

/**
 * @package   Thecoachsmb\CustomerAttribute
 */

namespace Akshay\CustomerAttribute\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Eav\Model\Config;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Customer\Model\Customer;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;

class InstallData implements InstallDataInterface
{
    /**
     * @var Config
     */
    private $eavConfig;

    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;
    /**
     * @var AttributeSetFactory
     */
    private $attributeSetFactory;

    public function __construct(
        EavSetupFactory $eavSetupFactory,
        Config $eavConfig,
        AttributeSetFactory $attributeSetFactory
    ){
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
        $this->attributeSetFactory = $attributeSetFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){
        $customerEntity = $this->eavConfig->getEntityType('customer');
        $attributeSetId = $customerEntity->getDefaultAttributeSetId();
        $attributeSet = $this->attributeSetFactory->create();
        $attributeGroupId = $attributeSet->getDefaultGroupId($attributeSetId);
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            Customer::ENTITY,
            'customer_profile_link',
            [
                'type' => 'varchar',
                'label' => 'Customer Profile Link',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 50,
                'position' => 50,
                'system' => 0,
                'adminhtml_only' => 1,
            ]
        );

        $customAttribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'customer_profile_link');

        $customAttribute->addData([
            'attribute_set_id' => $attributeSetId,
            'attribute_group_id' => $attributeGroupId,
            'used_in_forms' => ['adminhtml_customer']
        ]);

        $customAttribute->save();
    }
}