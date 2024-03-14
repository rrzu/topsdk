<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvRefundQueryResult {

    /**
        退款信息
     **/
    public $module;

    /**
        是否成功
     **/
    public $success;


    public function getModule() : AlibabaIdleIsvRefundQueryAppraiseIsvRefundDto{
        return $this->module;
    }

    public function setModule(AlibabaIdleIsvRefundQueryAppraiseIsvRefundDto $module){
        $this->module = $module;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

