<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleSelectedReVerifyOrderVO {

    /**
        100021
     **/
    public $order_status_for_ac;

    /**
        1
     **/
    public $order_status_for_seller;

    /**
        验货中心地址信息
     **/
    public $ac_address;

    /**
        复验订单卖家退回地址
     **/
    public $seller_address;

    /**
        复验订单买家收货地址
     **/
    public $buyer_address;

    /**
        验货中心仓库标识
     **/
    public $ac_storage_id;

    /**
        卖家发往验货中心物流单号
     **/
    public $seller_send_ac_logistics_id;

    /**
        验货中心发往买家物流
     **/
    public $ac_send_buyer_logistics_id;

    /**
        验货中心退回卖家物流
     **/
    public $ac_return_seller_logistics_id;


    public function getOrderStatusForAc() : string{
        return $this->order_status_for_ac;
    }

    public function setOrderStatusForAc(string $orderStatusForAc){
        $this->order_status_for_ac = $orderStatusForAc;
    }

    public function getOrderStatusForSeller() : string{
        return $this->order_status_for_seller;
    }

    public function setOrderStatusForSeller(string $orderStatusForSeller){
        $this->order_status_for_seller = $orderStatusForSeller;
    }

    public function getAcAddress() : AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO{
        return $this->ac_address;
    }

    public function setAcAddress(AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO $acAddress){
        $this->ac_address = $acAddress;
    }

    public function getSellerAddress() : AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO{
        return $this->seller_address;
    }

    public function setSellerAddress(AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO $sellerAddress){
        $this->seller_address = $sellerAddress;
    }

    public function getBuyerAddress() : AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO{
        return $this->buyer_address;
    }

    public function setBuyerAddress(AlibabaIdleIsvOrderQueryIdleOrderAddressTopSubVO $buyerAddress){
        $this->buyer_address = $buyerAddress;
    }

    public function getAcStorageId() : string{
        return $this->ac_storage_id;
    }

    public function setAcStorageId(string $acStorageId){
        $this->ac_storage_id = $acStorageId;
    }

    public function getSellerSendAcLogisticsId() : string{
        return $this->seller_send_ac_logistics_id;
    }

    public function setSellerSendAcLogisticsId(string $sellerSendAcLogisticsId){
        $this->seller_send_ac_logistics_id = $sellerSendAcLogisticsId;
    }

    public function getAcSendBuyerLogisticsId() : string{
        return $this->ac_send_buyer_logistics_id;
    }

    public function setAcSendBuyerLogisticsId(string $acSendBuyerLogisticsId){
        $this->ac_send_buyer_logistics_id = $acSendBuyerLogisticsId;
    }

    public function getAcReturnSellerLogisticsId() : string{
        return $this->ac_return_seller_logistics_id;
    }

    public function setAcReturnSellerLogisticsId(string $acReturnSellerLogisticsId){
        $this->ac_return_seller_logistics_id = $acReturnSellerLogisticsId;
    }


}

