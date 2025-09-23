<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderReturnAddressEditIsvLeaseOrderEditReturnAddressRequest {

    /**
        地址唯一id
     **/
    public $contact_id;

    /**
        订单id
     **/
    public $order_id;


    public function getContactId() : int{
        return $this->contact_id;
    }

    public function setContactId(int $contactId){
        $this->contact_id = $contactId;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }


}

