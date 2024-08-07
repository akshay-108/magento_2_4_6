<?php 

namespace Akshay\CollectionsQueries\Model;

class ProductCollection 
{
    protected $productCollection;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection
    ){
        $this->productCollection = $productCollection;
    }

    public function productCollection()
    {
        echo "<pre>";
        // $collection = $this->productCollection->addAttributeToSelect('*');
        // $collection->addAttributeToFilter('status', ['eq' => 0]);
        $collection = $this->productCollection->addFieldToSelect('*');
        $collection->addFieldToFilter('type_id', ['eq' => 'configurable']);

        // print_r(get_class_methods($this->productCollection));exit;
        var_dump(count($collection));exit;

    }
}