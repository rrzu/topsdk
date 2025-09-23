<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryCompensateServiceAddEvidenceInfo {

    /**
        申请原因
     **/
    public $apply_reason;

    /**
        上传的图片凭证
     **/
    public $pic_list;


    public function getApplyReason() : string{
        return $this->apply_reason;
    }

    public function setApplyReason(string $applyReason){
        $this->apply_reason = $applyReason;
    }

    public function getPicList() : array{
        return $this->pic_list;
    }

    public function setPicList(array $picList){
        $this->pic_list = $picList;
    }


}

