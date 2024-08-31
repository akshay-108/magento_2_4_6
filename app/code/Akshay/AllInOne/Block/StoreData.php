<?php

namespace Akshay\AllInOne\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Directory\Model\Currency;

class StoreData extends Template
{
    protected $context;

    protected $storeManagerInterface;

    protected $currency;

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManagerInterface,
        Currency $currency,
        array $data = []
    )
    {
        $this->storeManagerInterface = $storeManagerInterface;
        $this->currency = $currency;
        parent::__construct($context, $data);
    }

    /**
     * Get store base currency code
     *
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->storeManagerInterface->getStore()->getBaseCurrencyCode();
    }
    
     /**
     * Get current store currency code
     *
     * @return string
     */
    public function getCurrentCurrencyCode()
    {
        return $this->storeManagerInterface->getStore()->getCurrentCurrencyCode();
    }
    
    /**
     * Get default store currency code
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->storeManagerInterface->getStore()->getDefaultCurrencyCode();
    }
    
    /**
     * Get allowed store currency codes
     *
     * If base currency is not allowed in current website config scope,
     * then it can be disabled with $skipBaseNotAllowed
     *
     * @param bool $skipBaseNotAllowed
     * @return array
     */
    public function getAvailableCurrencyCodes($skipBaseNotAllowed = false)
    {
        return $this->storeManagerInterface->getStore()->getAvailableCurrencyCodes($skipBaseNotAllowed);
    }
    
    /**
     * Get array of installed currencies for the scope
     *
     * @return array
     */
    public function getAllowedCurrencies()
    {
        return $this->storeManagerInterface->getStore()->getAllowedCurrencies();
    }
    
    /**
     * Get current currency rate
     *
     * @return float
     */
    public function getCurrentCurrencyRate()
    {
        return $this->storeManagerInterface->getStore()->getCurrentCurrencyRate();
    }
    
    /**
     * Get currency symbol for current locale and currency code
     *
     * @return string
     */
    public function getCurrentCurrencySymbol()
    {
        return $this->currency->getCurrencySymbol();
    }
}
