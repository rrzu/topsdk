<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryPostageServiceApplyInfo {

    /**
        赔付金额
     **/
    public $amount;

    /**
        创建申请原因
     **/
    public $apply_reason;

    /**
        上传的图片凭证
     **/
    public $evidence;


    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getApplyReason() : string{
        return $this->apply_reason;
    }

    public function setApplyReason(string $applyReason){
        $this->apply_reason = $applyReason;
    }

    public function getEvidence() : string{
        return $this->evidence;
    }

    public function setEvidence(string $evidence){
        $this->evidence = $evidence;
    }


}

