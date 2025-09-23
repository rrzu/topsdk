<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvAddressModifyQueryAddressModifyParam {

    /**
        卖家id
     **/
    public $user_id;

    /**
        订单id
     **/
    public $biz_order_id;

    /**
        收货地址id
     **/
    public $deliver_id;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getDeliverId() : int{
        return $this->deliver_id;
    }

    public function setDeliverId(int $deliverId){
        $this->deliver_id = $deliverId;
    }


}

