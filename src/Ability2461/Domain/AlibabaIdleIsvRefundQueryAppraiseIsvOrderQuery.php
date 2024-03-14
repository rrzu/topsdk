<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvRefundQueryAppraiseIsvOrderQuery {

    /**
        交易订单号
     **/
    public $biz_order_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

