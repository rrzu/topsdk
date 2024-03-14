<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryCommonResult {

    /**
        订单信息
     **/
    public $module;

    /**
        是否成功
     **/
    public $success;


    public function getModule() : AlibabaIdleIsvOrderQueryIdleOrderQueryTopVO{
        return $this->module;
    }

    public function setModule(AlibabaIdleIsvOrderQueryIdleOrderQueryTopVO $module){
        $this->module = $module;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

