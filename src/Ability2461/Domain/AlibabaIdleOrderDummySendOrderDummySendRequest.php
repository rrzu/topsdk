<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleOrderDummySendOrderDummySendRequest {

    /**
        需要虚拟发货的订单号
     **/
    public $biz_order_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

