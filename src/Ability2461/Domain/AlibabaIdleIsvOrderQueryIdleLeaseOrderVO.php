<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleLeaseOrderVO {

    /**
        租赁开始时间
     **/
    public $lease_start_time;

    /**
        租赁结束时间
     **/
    public $lease_end_time;

    /**
        租赁天数
     **/
    public $lease_days;

    /**
        租赁类型
     **/
    public $lease_term_type;

    /**
        已支付押金金额
     **/
    public $paid_deposit_amount_in_cent;

    /**
        租赁订单状态
     **/
    public $lease_order_status;

    /**
        归还物流订单信息
     **/
    public $retrun_logistics_info;

    /**
        免押金额
     **/
    public $free_pledge_amount_in_cent;

    /**
        免押outid
     **/
    public $free_pledge_query_out_id;


    public function getLeaseStartTime() : int{
        return $this->lease_start_time;
    }

    public function setLeaseStartTime(int $leaseStartTime){
        $this->lease_start_time = $leaseStartTime;
    }

    public function getLeaseEndTime() : int{
        return $this->lease_end_time;
    }

    public function setLeaseEndTime(int $leaseEndTime){
        $this->lease_end_time = $leaseEndTime;
    }

    public function getLeaseDays() : int{
        return $this->lease_days;
    }

    public function setLeaseDays(int $leaseDays){
        $this->lease_days = $leaseDays;
    }

    public function getLeaseTermType() : int{
        return $this->lease_term_type;
    }

    public function setLeaseTermType(int $leaseTermType){
        $this->lease_term_type = $leaseTermType;
    }

    public function getPaidDepositAmountInCent() : int{
        return $this->paid_deposit_amount_in_cent;
    }

    public function setPaidDepositAmountInCent(int $paidDepositAmountInCent){
        $this->paid_deposit_amount_in_cent = $paidDepositAmountInCent;
    }

    public function getLeaseOrderStatus() : int{
        return $this->lease_order_status;
    }

    public function setLeaseOrderStatus(int $leaseOrderStatus){
        $this->lease_order_status = $leaseOrderStatus;
    }

    public function getRetrunLogisticsInfo() : AlibabaIdleIsvOrderQueryIdleOrderLogisticsTopSubVO{
        return $this->retrun_logistics_info;
    }

    public function setRetrunLogisticsInfo(AlibabaIdleIsvOrderQueryIdleOrderLogisticsTopSubVO $retrunLogisticsInfo){
        $this->retrun_logistics_info = $retrunLogisticsInfo;
    }

    public function getFreePledgeAmountInCent() : int{
        return $this->free_pledge_amount_in_cent;
    }

    public function setFreePledgeAmountInCent(int $freePledgeAmountInCent){
        $this->free_pledge_amount_in_cent = $freePledgeAmountInCent;
    }

    public function getFreePledgeQueryOutId() : string{
        return $this->free_pledge_query_out_id;
    }

    public function setFreePledgeQueryOutId(string $freePledgeQueryOutId){
        $this->free_pledge_query_out_id = $freePledgeQueryOutId;
    }


}

