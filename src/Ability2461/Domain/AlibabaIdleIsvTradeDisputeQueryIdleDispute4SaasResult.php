<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvTradeDisputeQueryIdleDispute4SaasResult {

    /**
        状态
     **/
    public $dispute_status_desc;

    /**
        是否存在纠纷单
     **/
    public $exist_dispute;

    /**
        逆向单id
     **/
    public $refund_id;

    /**
        纠纷单id
     **/
    public $dispute_id;

    /**
        纠纷单状态
     **/
    public $dispute_status;


    public function getDisputeStatusDesc() : string{
        return $this->dispute_status_desc;
    }

    public function setDisputeStatusDesc(string $disputeStatusDesc){
        $this->dispute_status_desc = $disputeStatusDesc;
    }

    public function getExistDispute() : bool{
        return $this->exist_dispute;
    }

    public function setExistDispute(bool $existDispute){
        $this->exist_dispute = $existDispute;
    }

    public function getRefundId() : int{
        return $this->refund_id;
    }

    public function setRefundId(int $refundId){
        $this->refund_id = $refundId;
    }

    public function getDisputeId() : int{
        return $this->dispute_id;
    }

    public function setDisputeId(int $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getDisputeStatus() : int{
        return $this->dispute_status;
    }

    public function setDisputeStatus(int $disputeStatus){
        $this->dispute_status = $disputeStatus;
    }


}

