<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleTradeGiveUpRecoverDepositIsvGiveUpDepositParam {

    /**
        订单id
     **/
    public $order_id;


    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }


}

