<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleOpenIsvRecycleOrderStatusQueryIdleOpenOrderStatusInfoVO {

    /**
        1:订单已创建/等待买家付款, 2:订单已付款/等待卖家发货, 3:已发货/等待买家确认收货, 4:交易成功, 5:已退款, 6:交易关闭
     **/
    public $order_status;

    /**
        订单子状态，一般用不到
     **/
    public $order_sub_status;

    /**
        业务标识
     **/
    public $x_global_biz_code;

    /**
        订单创建时间
     **/
    public $create_time;

    /**
        订单支付时间
     **/
    public $pay_time;

    /**
        订单发货时间
     **/
    public $ship_time;

    /**
        订单完结时间
     **/
    public $end_time;

    /**
        实付金额
     **/
    public $payment;


    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getOrderSubStatus() : string{
        return $this->order_sub_status;
    }

    public function setOrderSubStatus(string $orderSubStatus){
        $this->order_sub_status = $orderSubStatus;
    }

    public function getXGlobalBizCode() : string{
        return $this->x_global_biz_code;
    }

    public function setXGlobalBizCode(string $xGlobalBizCode){
        $this->x_global_biz_code = $xGlobalBizCode;
    }

    public function getCreateTime() : int{
        return $this->create_time;
    }

    public function setCreateTime(int $createTime){
        $this->create_time = $createTime;
    }

    public function getPayTime() : int{
        return $this->pay_time;
    }

    public function setPayTime(int $payTime){
        $this->pay_time = $payTime;
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

    public function getPayment() : int{
        return $this->payment;
    }

    public function setPayment(int $payment){
        $this->payment = $payment;
    }


}

