<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryOrderAndRateQueryDTO {

    /**
        总的订单数
     **/
    public $order_total_number;

    /**
        订单以及评价信息
     **/
    public $order_and_rate_list;

    /**
        是否还有下一页
     **/
    public $has_next_page;


    public function getOrderTotalNumber() : int{
        return $this->order_total_number;
    }

    public function setOrderTotalNumber(int $orderTotalNumber){
        $this->order_total_number = $orderTotalNumber;
    }

    public function getOrderAndRateList() : array{
        return $this->order_and_rate_list;
    }

    public function setOrderAndRateList(array $orderAndRateList){
        $this->order_and_rate_list = $orderAndRateList;
    }

    public function getHasNextPage() : bool{
        return $this->has_next_page;
    }

    public function setHasNextPage(bool $hasNextPage){
        $this->has_next_page = $hasNextPage;
    }


}

