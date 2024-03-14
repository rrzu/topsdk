<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvGoosefishOrderConfirmdisburseConfirmDisburseParamForOpen {

    /**
        幂等ID
     **/
    public $disburse_id;

    /**
        订单确认金额
     **/
    public $confirm_fee_cent;

    /**
        订单ID
     **/
    public $order_id;


    public function getDisburseId() : string{
        return $this->disburse_id;
    }

    public function setDisburseId(string $disburseId){
        $this->disburse_id = $disburseId;
    }

    public function getConfirmFeeCent() : int{
        return $this->confirm_fee_cent;
    }

    public function setConfirmFeeCent(int $confirmFeeCent){
        $this->confirm_fee_cent = $confirmFeeCent;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }


}

