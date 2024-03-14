<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvGoosefishVirtualDeliveryIdleOpenIsvVirtualDeliveryParam {

    /**
        订单ID
     **/
    public $biz_order_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

