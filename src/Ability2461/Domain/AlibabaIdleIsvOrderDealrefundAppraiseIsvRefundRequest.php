<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderDealrefundAppraiseIsvRefundRequest {

    /**
        订单号
     **/
    public $biz_order_id;

    /**
        退款操作说明
     **/
    public $leave_message;

    /**
        退款操作*      * 同意退款并执行打款->退款成功，仅退款情况下，直接调用；退货退款情况下，先调用同意退货接口，收到货再调用这个接口           AGREE_REFUND,     *      * 拒绝退款 -> 退款关闭           REFUSE_REFUND,     *      * 同意退货并提供退货地址 -> 等待买家退货           AGREE_RETURN
     **/
    public $operation;

    /**
        退货地址
     **/
    public $return_goods_address;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getLeaveMessage() : string{
        return $this->leave_message;
    }

    public function setLeaveMessage(string $leaveMessage){
        $this->leave_message = $leaveMessage;
    }

    public function getOperation() : string{
        return $this->operation;
    }

    public function setOperation(string $operation){
        $this->operation = $operation;
    }

    public function getReturnGoodsAddress() : AlibabaIdleIsvOrderDealrefundShippingAddressInfo{
        return $this->return_goods_address;
    }

    public function setReturnGoodsAddress(AlibabaIdleIsvOrderDealrefundShippingAddressInfo $returnGoodsAddress){
        $this->return_goods_address = $returnGoodsAddress;
    }


}

