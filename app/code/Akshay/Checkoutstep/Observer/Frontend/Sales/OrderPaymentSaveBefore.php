<?php

namespace Akshay\Checkoutstep\Observer\Frontend\Sales;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
use Magento\OfflinePayments\Model\Purchaseorder;
use Magento\Framework\App\Request\DataPersistorInterface;

class OrderPaymentSaveBefore implements \Magento\Framework\Event\ObserverInterface
{
    protected $order;
    protected $logger;
    protected $_serialize;
    protected $quoteRepository;

    public function __construct(
        \Magento\Sales\Api\Data\OrderInterface $order,
        \Magento\Quote\Api\CartRepositoryInterface $quoteRepository,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Serialize\Serializer\Serialize $serialize
    ) {
        $this->order = $order;
        $this->quoteRepository = $quoteRepository;
        $this->logger = $logger;
        $this->_serialize = $serialize;
    }
    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $orderids = $observer->getEvent()->getOrderIds();
        if(!$orderids){
            foreach ($orderids as $orderid) {
                $order = $this->_order->load($orderid);
                $method = $order->getPayment()->getMethod();
                if($method == 'purchaseorder') {
                    $quote_id = $order->getQuoteId();
                    $quote = $this->quoteRepository->get($quote_id);
                    $paymentQuote = $quote->getPayment();
                    $paymentOrder = $order->getPayment();
                    $paymentOrder->setData('paymentpocomment',$paymentQuote->getPaymentpocomment());
                    $paymentOrder->save();
                }
            }
        }
    }
}
