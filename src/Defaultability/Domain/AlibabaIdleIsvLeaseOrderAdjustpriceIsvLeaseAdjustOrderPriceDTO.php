<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderAdjustpriceIsvLeaseAdjustOrderPriceDTO {

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

    /**
        最新租期开始时间，传时间戳（ms）
     **/
    public $new_lease_period_start;

    /**
        最新租期结束时间，传时间戳（ms）
     **/
    public $new_lease_period_end;

    /**
        新押金，不能为0，单位分
     **/
    public $new_pledge_fee;


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

    public function getNewLeasePeriodStart() : int{
        return $this->new_lease_period_start;
    }

    public function setNewLeasePeriodStart(int $newLeasePeriodStart){
        $this->new_lease_period_start = $newLeasePeriodStart;
    }

    public function getNewLeasePeriodEnd() : int{
        return $this->new_lease_period_end;
    }

    public function setNewLeasePeriodEnd(int $newLeasePeriodEnd){
        $this->new_lease_period_end = $newLeasePeriodEnd;
    }

    public function getNewPledgeFee() : int{
        return $this->new_pledge_fee;
    }

    public function setNewPledgeFee(int $newPledgeFee){
        $this->new_pledge_fee = $newPledgeFee;
    }


}

