<?php
namespace Pfay\Contacts\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class TestObserver
 */
class TestObserver implements ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        die('test observer');
    }
}