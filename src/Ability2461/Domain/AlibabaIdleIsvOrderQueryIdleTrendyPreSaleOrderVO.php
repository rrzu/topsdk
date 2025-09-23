<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyPreSaleOrderVO {

    /**
        潮玩发预售订单状态
     **/
    public $pre_sale_order_status;

    /**
        潮玩预售订单状态描述
     **/
    public $pre_sale_order_status_desc;

    /**
        潮玩预售定金金额
     **/
    public $deposit_price;

    /**
        潮玩预售尾款金额
     **/
    public $balance_price;

    /**
        潮玩预售邮费金额
     **/
    public $post_price;

    /**
        潮玩预售实付金额
     **/
    public $pre_sale_payment;

    /**
        预售尾款支付时间
     **/
    public $balance_pay_time;


    public function getPreSaleOrderStatus() : int{
        return $this->pre_sale_order_status;
    }

    public function setPreSaleOrderStatus(int $preSaleOrderStatus){
        $this->pre_sale_order_status = $preSaleOrderStatus;
    }

    public function getPreSaleOrderStatusDesc() : string{
        return $this->pre_sale_order_status_desc;
    }

    public function setPreSaleOrderStatusDesc(string $preSaleOrderStatusDesc){
        $this->pre_sale_order_status_desc = $preSaleOrderStatusDesc;
    }

    public function getDepositPrice() : int{
        return $this->deposit_price;
    }

    public function setDepositPrice(int $depositPrice){
        $this->deposit_price = $depositPrice;
    }

    public function getBalancePrice() : int{
        return $this->balance_price;
    }

    public function setBalancePrice(int $balancePrice){
        $this->balance_price = $balancePrice;
    }

    public function getPostPrice() : int{
        return $this->post_price;
    }

    public function setPostPrice(int $postPrice){
        $this->post_price = $postPrice;
    }

    public function getPreSalePayment() : int{
        return $this->pre_sale_payment;
    }

    public function setPreSalePayment(int $preSalePayment){
        $this->pre_sale_payment = $preSalePayment;
    }

    public function getBalancePayTime() : int{
        return $this->balance_pay_time;
    }

    public function setBalancePayTime(int $balancePayTime){
        $this->balance_pay_time = $balancePayTime;
    }


}

