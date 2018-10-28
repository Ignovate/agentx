<?php

class Dever_Notification_Model_Notification extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('dever_notification/notification');
    }

    public function loadByCustomer($id)
    {
        $collection = $this->getCollection()
            ->addFieldToFilter('customer_id', $id)
            ->load();

        return $collection->getData();
    }
}