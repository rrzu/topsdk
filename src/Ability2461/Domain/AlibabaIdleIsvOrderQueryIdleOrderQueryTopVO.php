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

    /**
        需要屏蔽的操作（ORDER_CLOSE : 关单，ADJUST_PRICE : 改价）
     **/
    public $forbid_actions;

    /**
        所有优惠关联订单
     **/
    public $prom_related_order_ids;

    /**
        发车订单信息
     **/
    public $fa_che_order;

    /**
        关单类型
     **/
    public $close_reason;

    /**
        退款类型
     **/
    public $refund_status;

    /**
        预售订单信息
     **/
    public $pre_sale_order;

    /**
        订单类型
     **/
    public $idle_biz_code;

    /**
        虚拟流量号卡信息
     **/
    public $virtual_flow_card;

    /**
        二次元抽赏订单信息
     **/
    public $chou_shang_order;

    /**
        邮费单逆向信息
     **/
    public $postage_compensate_list;

    /**
        二次元抽赏邮费订单信息
     **/
    public $chou_shang_post_order;

    /**
        闲鱼币抵扣信息
     **/
    public $idle_coin_deduction_order;

    /**
        软件服务费,单位是分
     **/
    public $software_fee;

    /**
        游戏代练订单
     **/
    public $game_boosting_order;

    /**
        租赁订单信息
     **/
    public $lease_info;

    /**
        严选复验订单额外信息
     **/
    public $selected_re_verify_order;


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

    public function getForbidActions() : array{
        return $this->forbid_actions;
    }

    public function setForbidActions(array $forbidActions){
        $this->forbid_actions = $forbidActions;
    }

    public function getPromRelatedOrderIds() : string{
        return $this->prom_related_order_ids;
    }

    public function setPromRelatedOrderIds(string $promRelatedOrderIds){
        $this->prom_related_order_ids = $promRelatedOrderIds;
    }

    public function getFaCheOrder() : AlibabaIdleIsvOrderQueryIdleTrendyFaCheOrderVO{
        return $this->fa_che_order;
    }

    public function setFaCheOrder(AlibabaIdleIsvOrderQueryIdleTrendyFaCheOrderVO $faCheOrder){
        $this->fa_che_order = $faCheOrder;
    }

    public function getCloseReason() : string{
        return $this->close_reason;
    }

    public function setCloseReason(string $closeReason){
        $this->close_reason = $closeReason;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getPreSaleOrder() : AlibabaIdleIsvOrderQueryIdleTrendyPreSaleOrderVO{
        return $this->pre_sale_order;
    }

    public function setPreSaleOrder(AlibabaIdleIsvOrderQueryIdleTrendyPreSaleOrderVO $preSaleOrder){
        $this->pre_sale_order = $preSaleOrder;
    }

    public function getIdleBizCode() : string{
        return $this->idle_biz_code;
    }

    public function setIdleBizCode(string $idleBizCode){
        $this->idle_biz_code = $idleBizCode;
    }

    public function getVirtualFlowCard() : AlibabaIdleIsvOrderQueryIdleTrendyVirtualFlowCardVO{
        return $this->virtual_flow_card;
    }

    public function setVirtualFlowCard(AlibabaIdleIsvOrderQueryIdleTrendyVirtualFlowCardVO $virtualFlowCard){
        $this->virtual_flow_card = $virtualFlowCard;
    }

    public function getChouShangOrder() : AlibabaIdleIsvOrderQueryIdleTrendyChouShangOrderVO{
        return $this->chou_shang_order;
    }

    public function setChouShangOrder(AlibabaIdleIsvOrderQueryIdleTrendyChouShangOrderVO $chouShangOrder){
        $this->chou_shang_order = $chouShangOrder;
    }

    public function getPostageCompensateList() : array{
        return $this->postage_compensate_list;
    }

    public function setPostageCompensateList(array $postageCompensateList){
        $this->postage_compensate_list = $postageCompensateList;
    }

    public function getChouShangPostOrder() : AlibabaIdleIsvOrderQueryIdleTrendyChouShangPostOrderVO{
        return $this->chou_shang_post_order;
    }

    public function setChouShangPostOrder(AlibabaIdleIsvOrderQueryIdleTrendyChouShangPostOrderVO $chouShangPostOrder){
        $this->chou_shang_post_order = $chouShangPostOrder;
    }

    public function getIdleCoinDeductionOrder() : AlibabaIdleIsvOrderQueryIdleCoinDeductionOrderVO{
        return $this->idle_coin_deduction_order;
    }

    public function setIdleCoinDeductionOrder(AlibabaIdleIsvOrderQueryIdleCoinDeductionOrderVO $idleCoinDeductionOrder){
        $this->idle_coin_deduction_order = $idleCoinDeductionOrder;
    }

    public function getSoftwareFee() : string{
        return $this->software_fee;
    }

    public function setSoftwareFee(string $softwareFee){
        $this->software_fee = $softwareFee;
    }

    public function getGameBoostingOrder() : AlibabaIdleIsvOrderQueryIdleTrendyGameBoostingOrderVO{
        return $this->game_boosting_order;
    }

    public function setGameBoostingOrder(AlibabaIdleIsvOrderQueryIdleTrendyGameBoostingOrderVO $gameBoostingOrder){
        $this->game_boosting_order = $gameBoostingOrder;
    }

    public function getLeaseInfo() : AlibabaIdleIsvOrderQueryIdleLeaseOrderVO{
        return $this->lease_info;
    }

    public function setLeaseInfo(AlibabaIdleIsvOrderQueryIdleLeaseOrderVO $leaseInfo){
        $this->lease_info = $leaseInfo;
    }

    public function getSelectedReVerifyOrder() : AlibabaIdleIsvOrderQueryIdleSelectedReVerifyOrderVO{
        return $this->selected_re_verify_order;
    }

    public function setSelectedReVerifyOrder(AlibabaIdleIsvOrderQueryIdleSelectedReVerifyOrderVO $selectedReVerifyOrder){
        $this->selected_re_verify_order = $selectedReVerifyOrder;
    }


}

