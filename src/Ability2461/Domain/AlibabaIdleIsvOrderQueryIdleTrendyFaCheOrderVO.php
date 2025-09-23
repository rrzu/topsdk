<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyFaCheOrderVO {

    /**
        潮玩发车订单备注列表
     **/
    public $trendy_fc_order_memo_list;

    /**
        潮玩发车订单状态
     **/
    public $trendy_fc_order_status;

    /**
        潮玩发车订单状态描述
     **/
    public $trendy_fc_order_status_desc;

    /**
        发车支付邮费 单位：分
     **/
    public $trendy_fc_order_postage_price;

    /**
        单价 单位：分
     **/
    public $unit_price;

    /**
        总价 单位：分
     **/
    public $total_price;

    /**
        实收金额
     **/
    public $actual_price;


    public function getTrendyFcOrderMemoList() : array{
        return $this->trendy_fc_order_memo_list;
    }

    public function setTrendyFcOrderMemoList(array $trendyFcOrderMemoList){
        $this->trendy_fc_order_memo_list = $trendyFcOrderMemoList;
    }

    public function getTrendyFcOrderStatus() : int{
        return $this->trendy_fc_order_status;
    }

    public function setTrendyFcOrderStatus(int $trendyFcOrderStatus){
        $this->trendy_fc_order_status = $trendyFcOrderStatus;
    }

    public function getTrendyFcOrderStatusDesc() : string{
        return $this->trendy_fc_order_status_desc;
    }

    public function setTrendyFcOrderStatusDesc(string $trendyFcOrderStatusDesc){
        $this->trendy_fc_order_status_desc = $trendyFcOrderStatusDesc;
    }

    public function getTrendyFcOrderPostagePrice() : int{
        return $this->trendy_fc_order_postage_price;
    }

    public function setTrendyFcOrderPostagePrice(int $trendyFcOrderPostagePrice){
        $this->trendy_fc_order_postage_price = $trendyFcOrderPostagePrice;
    }

    public function getUnitPrice() : int{
        return $this->unit_price;
    }

    public function setUnitPrice(int $unitPrice){
        $this->unit_price = $unitPrice;
    }

    public function getTotalPrice() : int{
        return $this->total_price;
    }

    public function setTotalPrice(int $totalPrice){
        $this->total_price = $totalPrice;
    }

    public function getActualPrice() : int{
        return $this->actual_price;
    }

    public function setActualPrice(int $actualPrice){
        $this->actual_price = $actualPrice;
    }


}

