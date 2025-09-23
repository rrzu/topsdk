<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyGameBoostingOrderVO {

    /**
        卖家备注信息
     **/
    public $seller_remark;

    /**
        代练订单状态
     **/
    public $order_status;

    /**
        退款金额，单位分
     **/
    public $refund_fee;


    public function getSellerRemark() : string{
        return $this->seller_remark;
    }

    public function setSellerRemark(string $sellerRemark){
        $this->seller_remark = $sellerRemark;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }


}

