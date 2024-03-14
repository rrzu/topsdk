<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderCloseAppraiseIsvOrderCloseDto {

    /**
        订单id
     **/
    public $biz_order_id;

    /**
        关闭订单原因
     **/
    public $close_reason;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getCloseReason() : string{
        return $this->close_reason;
    }

    public function setCloseReason(string $closeReason){
        $this->close_reason = $closeReason;
    }


}

