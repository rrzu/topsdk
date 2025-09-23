<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryOrderAndRateInfo {

    /**
        订单信息
     **/
    public $order_simple_info;

    /**
        订单评价集合
     **/
    public $append_rate_list;

    /**
        买家给出的主评
     **/
    public $buyer_main_rate;

    /**
        卖家给出的主评
     **/
    public $seller_main_rate;


    public function getOrderSimpleInfo() : AlibabaIdleIsvOrderRateQueryOrderSimpleInfo{
        return $this->order_simple_info;
    }

    public function setOrderSimpleInfo(AlibabaIdleIsvOrderRateQueryOrderSimpleInfo $orderSimpleInfo){
        $this->order_simple_info = $orderSimpleInfo;
    }

    public function getAppendRateList() : array{
        return $this->append_rate_list;
    }

    public function setAppendRateList(array $appendRateList){
        $this->append_rate_list = $appendRateList;
    }

    public function getBuyerMainRate() : AlibabaIdleIsvOrderRateQueryIdleRateDTO{
        return $this->buyer_main_rate;
    }

    public function setBuyerMainRate(AlibabaIdleIsvOrderRateQueryIdleRateDTO $buyerMainRate){
        $this->buyer_main_rate = $buyerMainRate;
    }

    public function getSellerMainRate() : AlibabaIdleIsvOrderRateQueryIdleRateDTO{
        return $this->seller_main_rate;
    }

    public function setSellerMainRate(AlibabaIdleIsvOrderRateQueryIdleRateDTO $sellerMainRate){
        $this->seller_main_rate = $sellerMainRate;
    }


}

