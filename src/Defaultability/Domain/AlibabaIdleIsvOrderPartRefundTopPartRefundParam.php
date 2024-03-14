<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvOrderPartRefundTopPartRefundParam {

    /**
        退款金额，单位分
     **/
    public $refund_fee;

    /**
        订单号 
     **/
    public $biz_order_id;

    /**
        退款幂等键
     **/
    public $idem_id;


    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getIdemId() : string{
        return $this->idem_id;
    }

    public function setIdemId(string $idemId){
        $this->idem_id = $idemId;
    }


}

