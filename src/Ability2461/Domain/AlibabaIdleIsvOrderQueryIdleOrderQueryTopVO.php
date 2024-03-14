<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderQueryTopVO {

    /**
        订单号
     **/
    public $biz_order_id;

    /**
        商品购买数量
     **/
    public $buy_amount;

    /**
        买家收货地址
     **/
    public $buyer_address;

    /**
        买家昵称（不唯一且买家可以自己更改）
     **/
    public $buyer_nick;

    /**
        订单创建时间,时间戳,毫秒
     **/
    public $create_time;

    /**
        商品信息
     **/
    public $item;

    /**
        0:未知状态、1：订单已创建、2：订单已付款、3：已发货、4：交易成功、5：已退款、6：交易关闭
     **/
    public $order_status;

    /**
        订单下单付款时间,时间戳,毫秒
     **/
    public $pay_time;

    /**
        实付金额, 单位分
     **/
    public $payment;

    /**
        邮费
     **/
    public $post_fee;

    /**
        卖家昵称（不唯一且买家可以自己更改）
     **/
    public $seller_nick;

    /**
        订单发货时间,时间戳,毫秒
     **/
    public $ship_time;

    /**
        订单完结时间,时间戳,毫秒
     **/
    public $end_time;

    /**
        sku信息（格式： skuId|属性名:属性值;属性名:属性值）
     **/
    public $sku;

    /**
        物流信息
     **/
    public $logistics;

    /**
        支付宝订单号（流水号）
     **/
    public $out_pay_id;

    /**
        加密的买家id（唯一且不会改变）
     **/
    public $encryption_buyer_id;

    /**
        加密的卖家id（唯一且不会改变）
     **/
    public $encryption_seller_id;

    /**
        服务赔付单信息列表，多个
     **/
    public $service_compensate_list;

    /**
        订单子状态
     **/
    public $order_sub_status;

    /**
        虚拟收货信息
     **/
    public $virtual_delivery_info;

    /**
        子业务标识
     **/
    public $x_global_biz_code;

    /**
        合并下单的订单关联id
     **/
    public $og_id;


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

    public function getBuyerAddress() : AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO{
        return $this->buyer_address;
    }

    public function setBuyerAddress(AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO $buyerAddress){
        $this->buyer_address = $buyerAddress;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getCreateTime() : int{
        return $this->create_time;
    }

    public function setCreateTime(int $createTime){
        $this->create_time = $createTime;
    }

    public function getItem() : AlibabaIdleIsvOrderQueryIdleOrderItemTopSubVO{
        return $this->item;
    }

    public function setItem(AlibabaIdleIsvOrderQueryIdleOrderItemTopSubVO $item){
        $this->item = $item;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getPayTime() : int{
        return $this->pay_time;
    }

    public function setPayTime(int $payTime){
        $this->pay_time = $payTime;
    }

    public function getPayment() : int{
        return $this->payment;
    }

    public function setPayment(int $payment){
        $this->payment = $payment;
    }

    public function getPostFee() : int{
        return $this->post_fee;
    }

    public function setPostFee(int $postFee){
        $this->post_fee = $postFee;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getShipTime() : int{
        return $this->ship_time;
    }

    public function setShipTime(int $shipTime){
        $this->ship_time = $shipTime;
    }

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }

    public function getSku() : string{
        return $this->sku;
    }

    public function setSku(string $sku){
        $this->sku = $sku;
    }

    public function getLogistics() : AlibabaIdleIsvOrderQueryIdleOrderLogisticsTopSubVO{
        return $this->logistics;
    }

    public function setLogistics(AlibabaIdleIsvOrderQueryIdleOrderLogisticsTopSubVO $logistics){
        $this->logistics = $logistics;
    }

    public function getOutPayId() : string{
        return $this->out_pay_id;
    }

    public function setOutPayId(string $outPayId){
        $this->out_pay_id = $outPayId;
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

    public function getServiceCompensateList() : array{
        return $this->service_compensate_list;
    }

    public function setServiceCompensateList(array $serviceCompensateList){
        $this->service_compensate_list = $serviceCompensateList;
    }

    public function getOrderSubStatus() : string{
        return $this->order_sub_status;
    }

    public function setOrderSubStatus(string $orderSubStatus){
        $this->order_sub_status = $orderSubStatus;
    }

    public function getVirtualDeliveryInfo() : AlibabaIdleIsvOrderQueryVirtualDeliveryInfoVO{
        return $this->virtual_delivery_info;
    }

    public function setVirtualDeliveryInfo(AlibabaIdleIsvOrderQueryVirtualDeliveryInfoVO $virtualDeliveryInfo){
        $this->virtual_delivery_info = $virtualDeliveryInfo;
    }

    public function getXGlobalBizCode() : string{
        return $this->x_global_biz_code;
    }

    public function setXGlobalBizCode(string $xGlobalBizCode){
        $this->x_global_biz_code = $xGlobalBizCode;
    }

    public function getOgId() : string{
        return $this->og_id;
    }

    public function setOgId(string $ogId){
        $this->og_id = $ogId;
    }


}

