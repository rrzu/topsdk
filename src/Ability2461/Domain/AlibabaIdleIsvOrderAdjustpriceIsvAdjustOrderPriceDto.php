<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderAdjustpriceIsvAdjustOrderPriceDto {

    /**
        最新价格，单位分；必选，金额>0
     **/
    public $new_price_fee;

    /**
        最新邮费，单位分；必选，金额>=0
     **/
    public $new_transport_fee;

    /**
        订单id
     **/
    public $biz_order_id;


    public function getNewPriceFee() : int{
        return $this->new_price_fee;
    }

    public function setNewPriceFee(int $newPriceFee){
        $this->new_price_fee = $newPriceFee;
    }

    public function getNewTransportFee() : int{
        return $this->new_transport_fee;
    }

    public function setNewTransportFee(int $newTransportFee){
        $this->new_transport_fee = $newTransportFee;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

