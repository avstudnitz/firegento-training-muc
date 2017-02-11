<?php

namespace Firegento\ReplacementMethods\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Model\Order;

class SendDataAfterCheckout implements ObserverInterface
{
    /** @var \Psr\Log\LoggerInterface  */
    private $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var Order $order */
        $order = $observer->getData('order');
        $this->logger->info('Order ' . $order->getIncrementId() . ' has been created.');
    }
}