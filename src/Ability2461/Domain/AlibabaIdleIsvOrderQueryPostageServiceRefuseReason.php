<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryPostageServiceRefuseReason {

    /**
        拒绝原因的描述
     **/
    public $reason_desc;

    /**
        拒绝凭证的图片
     **/
    public $evidence;

    /**
        拒绝原因标签
     **/
    public $refuse_tag;


    public function getReasonDesc() : string{
        return $this->reason_desc;
    }

    public function setReasonDesc(string $reasonDesc){
        $this->reason_desc = $reasonDesc;
    }

    public function getEvidence() : string{
        return $this->evidence;
    }

    public function setEvidence(string $evidence){
        $this->evidence = $evidence;
    }

    public function getRefuseTag() : string{
        return $this->refuse_tag;
    }

    public function setRefuseTag(string $refuseTag){
        $this->refuse_tag = $refuseTag;
    }


}

