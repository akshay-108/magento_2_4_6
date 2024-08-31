<?php

namespace Akshay\AllInOne\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;
use Magento\Theme\Block\Html\Header\Logo;

class LogoInfo extends Template
{
    protected $context;

    protected $logo;

    public function __construct(
        Context $context,
        Logo $logo,
        array $data = []
    )
    {
        $this->context = $context;
        $this->logo = $logo;
        return parent::__construct($context, $data);
    }

    /**
     * Get logo image URL
     *
     * @return string
     */
    public function getLogoSrc()
    {
        return $this->logo->getLogoSrc();
    }
    
    /**
     * Get logo text
     *
     * @return string
     */
    public function getLogoAlt()
    {
        return $this->logo->getLogoAlt();
    }
    
    /**
     * Get logo width
     *
     * @return int
     */
    public function getLogoWidth()
    {
        return $this->logo->getLogoWidth();
    }
    
    /**
     * Get logo height
     *
     * @return int
     */
    public function getLogoHeight()
    {
        return $this->logo->getLogoHeight();
    }
}
