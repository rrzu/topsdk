<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderInspectionUploadIsvLeaseOrderInspectionInfoDTO {

    /**
        订单id
     **/
    public $order_id;

    /**
        验货是否通过，未通过会发起赔付
     **/
    public $inspection_result;

    /**
        验货异常描述凭证
     **/
    public $proof;

    /**
        商品问题需扣除金额，单位分
     **/
    public $deduct_fee_by_item_problem;

    /**
        逾期未归还扣除金额，单位分
     **/
    public $deduct_fee_by_over_time;


    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getInspectionResult() : bool{
        return $this->inspection_result;
    }

    public function setInspectionResult(bool $inspectionResult){
        $this->inspection_result = $inspectionResult;
    }

    public function getProof() : AlibabaIdleIsvLeaseOrderInspectionUploadProof{
        return $this->proof;
    }

    public function setProof(AlibabaIdleIsvLeaseOrderInspectionUploadProof $proof){
        $this->proof = $proof;
    }

    public function getDeductFeeByItemProblem() : int{
        return $this->deduct_fee_by_item_problem;
    }

    public function setDeductFeeByItemProblem(int $deductFeeByItemProblem){
        $this->deduct_fee_by_item_problem = $deductFeeByItemProblem;
    }

    public function getDeductFeeByOverTime() : int{
        return $this->deduct_fee_by_over_time;
    }

    public function setDeductFeeByOverTime(int $deductFeeByOverTime){
        $this->deduct_fee_by_over_time = $deductFeeByOverTime;
    }


}

