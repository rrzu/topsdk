<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryOrderSimpleInfo {

    /**
        订单id
     **/
    public $order_id;

    /**
        订单交易状态。 0:未知状态、1：订单已创建、2：订单已付款、3：已发货、4：交易成功、5：已退款、6：交易关闭
     **/
    public $order_status;

    /**
        订单物流状态。 * 1 未发货      * 2 已发货      * 3 已收货      * 4 已经退货      * 5 部分收货      * 6 部分发货中      * 8 还未创建
     **/
    public $logistics_status;

    /**
        订单创建时间
     **/
    public $gmt_create;

    /**
        订单最近一次更新时间
     **/
    public $gmt_modified;

    /**
        商品id
     **/
    public $item_id;


    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getOrderStatus() : int{
        return $this->order_status;
    }

    public function setOrderStatus(int $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getLogisticsStatus() : int{
        return $this->logistics_status;
    }

    public function setLogisticsStatus(int $logisticsStatus){
        $this->logistics_status = $logisticsStatus;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }


}

