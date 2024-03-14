<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderDealrefundRefundDto {

    /**
        申请退款金额
     **/
    public $apply_refund_fee;

    /**
        订单Id
     **/
    public $biz_order_id;

    /**
        退款单ID
     **/
    public $dispute_id;

    /**
        实际退款金额
     **/
    public $real_refund_fee;

    /**
        退款状态 与逆向DisputeStatusEnum 一致，1-9
     **/
    public $refund_status;

    /**
        退款时间
     **/
    public $refund_time;

    /**
        申请退款类型: REFUND_ONLY_NO_SHIP(未发货仅退款)，REFUND_ONLY_NO_RECIVE（已发货未收到货仅退款），REFUND_ONLY_WHIT_GOODS（收到货仅退款(退货退款)）
     **/
    public $refund_type;

    /**
        退货状态 GoodsStatusEnum 一致
     **/
    public $return_goods_status;

    /**
        到达下一个节点的超时时间点
     **/
    public $timeout;


    public function getApplyRefundFee() : int{
        return $this->apply_refund_fee;
    }

    public function setApplyRefundFee(int $applyRefundFee){
        $this->apply_refund_fee = $applyRefundFee;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getDisputeId() : int{
        return $this->dispute_id;
    }

    public function setDisputeId(int $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getRealRefundFee() : int{
        return $this->real_refund_fee;
    }

    public function setRealRefundFee(int $realRefundFee){
        $this->real_refund_fee = $realRefundFee;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getRefundTime() : string{
        return $this->refund_time;
    }

    public function setRefundTime(string $refundTime){
        $this->refund_time = $refundTime;
    }

    public function getRefundType() : string{
        return $this->refund_type;
    }

    public function setRefundType(string $refundType){
        $this->refund_type = $refundType;
    }

    public function getReturnGoodsStatus() : string{
        return $this->return_goods_status;
    }

    public function setReturnGoodsStatus(string $returnGoodsStatus){
        $this->return_goods_status = $returnGoodsStatus;
    }

    public function getTimeout() : int{
        return $this->timeout;
    }

    public function setTimeout(int $timeout){
        $this->timeout = $timeout;
    }


}

