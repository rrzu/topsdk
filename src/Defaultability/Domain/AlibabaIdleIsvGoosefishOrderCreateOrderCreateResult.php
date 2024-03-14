<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvGoosefishOrderCreateOrderCreateResult {

    /**
        订单编号
     **/
    public $biz_order_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

