<?php

namespace Akshay\UiComponent\Controller\UiComponent;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
		return parent::__construct($context);
    }
    
    public function execute()
    {
        return $this->pageFactory->create();
    }
}