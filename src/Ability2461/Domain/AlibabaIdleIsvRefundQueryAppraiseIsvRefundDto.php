<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvRefundQueryAppraiseIsvRefundDto {

    /**
        订单号
     **/
    public $biz_order_id;

    /**
        商品购买数量
     **/
    public $buy_amount;

    /**
        买家申请退款原因
     **/
    public $buyer_apply_reason;

    /**
        买家退款说明,买家申请退款二级原因
     **/
    public $buyer_apply_sub_reason;

    /**
        买家昵称（不唯一且用户可以自己更改）
     **/
    public $buyer_nick;

    /**
        货物状态
     **/
    public $goods_status;

    /**
        商品信息
     **/
    public $item;

    /**
        买家是否需要退货
     **/
    public $need_return_goods;

    /**
        订单状态
     **/
    public $order_status;

    /**
        订单实付金额,单位分
     **/
    public $payment;

    /**
        买家申请退款描述
     **/
    public $buyer_apply_desc;

    /**
        退款申请时间,时间戳,单位分
     **/
    public $refund_create_time;

    /**
        退还金额(退还给买家的金额),单位分
     **/
    public $refund_fee;

    /**
        退款订单号
     **/
    public $refund_id;

    /**
        退货-快递公司
     **/
    public $refund_post_company;

    /**
        退货-快递单号
     **/
    public $refund_post_no;

    /**
        退款订单状态
     **/
    public $refund_status;

    /**
        退款最新修改时间,时间戳,单位分
     **/
    public $refund_modify_time;

    /**
        卖家同意退货说明
     **/
    public $seller_agree_msg;

    /**
        卖家昵称（不唯一且用户可以自己更改）
     **/
    public $seller_nick;

    /**
        卖家拒绝退款说明
     **/
    public $seller_refuse_msg;

    /**
        卖家拒绝退款原因
     **/
    public $seller_refuse_reason;

    /**
        退款超时信息
     **/
    public $timeout_data;

    /**
        加密的买家id（唯一且不会改变）
     **/
    public $encryption_buyer_id;

    /**
        加密的卖家id（唯一且不会改变）
     **/
    public $encryption_seller_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getBuyAmount() : int{
        return $this->buy_amount;
    }

    public function setBuyAmount(int $buyAmount){
        $this->buy_amount = $buyAmount;
    }

    public function getBuyerApplyReason() : string{
        return $this->buyer_apply_reason;
    }

    public function setBuyerApplyReason(string $buyerApplyReason){
        $this->buyer_apply_reason = $buyerApplyReason;
    }

    public function getBuyerApplySubReason() : string{
        return $this->buyer_apply_sub_reason;
    }

    public function setBuyerApplySubReason(string $buyerApplySubReason){
        $this->buyer_apply_sub_reason = $buyerApplySubReason;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getGoodsStatus() : int{
        return $this->goods_status;
    }

    public function setGoodsStatus(int $goodsStatus){
        $this->goods_status = $goodsStatus;
    }

    public function getItem() : AlibabaIdleIsvRefundQueryAppraiseIsvItemDto{
        return $this->item;
    }

    public function setItem(AlibabaIdleIsvRefundQueryAppraiseIsvItemDto $item){
        $this->item = $item;
    }

    public function getNeedReturnGoods() : bool{
        return $this->need_return_goods;
    }

    public function setNeedReturnGoods(bool $needReturnGoods){
        $this->need_return_goods = $needReturnGoods;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getPayment() : int{
        return $this->payment;
    }

    public function setPayment(int $payment){
        $this->payment = $payment;
    }

    public function getBuyerApplyDesc() : string{
        return $this->buyer_apply_desc;
    }

    public function setBuyerApplyDesc(string $buyerApplyDesc){
        $this->buyer_apply_desc = $buyerApplyDesc;
    }

    public function getRefundCreateTime() : int{
        return $this->refund_create_time;
    }

    public function setRefundCreateTime(int $refundCreateTime){
        $this->refund_create_time = $refundCreateTime;
    }

    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getRefundId() : int{
        return $this->refund_id;
    }

    public function setRefundId(int $refundId){
        $this->refund_id = $refundId;
    }

    public function getRefundPostCompany() : string{
        return $this->refund_post_company;
    }

    public function setRefundPostCompany(string $refundPostCompany){
        $this->refund_post_company = $refundPostCompany;
    }

    public function getRefundPostNo() : string{
        return $this->refund_post_no;
    }

    public function setRefundPostNo(string $refundPostNo){
        $this->refund_post_no = $refundPostNo;
    }

    public function getRefundStatus() : int{
        return $this->refund_status;
    }

    public function setRefundStatus(int $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getRefundModifyTime() : int{
        return $this->refund_modify_time;
    }

    public function setRefundModifyTime(int $refundModifyTime){
        $this->refund_modify_time = $refundModifyTime;
    }

    public function getSellerAgreeMsg() : string{
        return $this->seller_agree_msg;
    }

    public function setSellerAgreeMsg(string $sellerAgreeMsg){
        $this->seller_agree_msg = $sellerAgreeMsg;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getSellerRefuseMsg() : string{
        return $this->seller_refuse_msg;
    }

    public function setSellerRefuseMsg(string $sellerRefuseMsg){
        $this->seller_refuse_msg = $sellerRefuseMsg;
    }

    public function getSellerRefuseReason() : string{
        return $this->seller_refuse_reason;
    }

    public function setSellerRefuseReason(string $sellerRefuseReason){
        $this->seller_refuse_reason = $sellerRefuseReason;
    }

    public function getTimeoutData() : AlibabaIdleIsvRefundQueryIsvRefundTimeoutDto{
        return $this->timeout_data;
    }

    public function setTimeoutData(AlibabaIdleIsvRefundQueryIsvRefundTimeoutDto $timeoutData){
        $this->timeout_data = $timeoutData;
    }

    public function getEncryptionBuyerId() : string{
        return $this->encryption_buyer_id;
    }

    public function setEncryptionBuyerId(string $encryptionBuyerId){
        $this->encryption_buyer_id = $encryptionBuyerId;
    }

    public function getEncryptionSellerId() : string{
        return $this->encryption_seller_id;
    }

    public function setEncryptionSellerId(string $encryptionSellerId){
        $this->encryption_seller_id = $encryptionSellerId;
    }


}

