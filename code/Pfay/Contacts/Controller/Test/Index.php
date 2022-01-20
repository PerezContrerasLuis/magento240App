<?php
namespace Pfay\Contacts\Controller\Test;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        /* $this->_view->loadLayout();
        $this->_view->renderLayout(); */

        /* $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Paul Dupond');
        $contact->save();

        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Paul Ricard');
        $contact->save();

        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Jack Daniels');
        $contact->save();
        die('test'); */
        $contactModel = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $collection = $contactModel->getCollection()->addFieldToFilter('name', array('like'=> 'Paul Ricard'));
        foreach($collection as $contact) {
            var_dump($contact->getData());
        }        
        die('test');
    }
}