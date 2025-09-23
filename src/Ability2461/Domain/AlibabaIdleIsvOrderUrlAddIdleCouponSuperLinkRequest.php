<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderUrlAddIdleCouponSuperLinkRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        兑换链接
     **/
    public $usage_url_list;


    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getUsageUrlList() : array{
        return $this->usage_url_list;
    }

    public function setUsageUrlList(array $usageUrlList){
        $this->usage_url_list = $usageUrlList;
    }


}

