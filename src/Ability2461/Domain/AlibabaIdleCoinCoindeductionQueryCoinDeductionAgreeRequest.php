<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionQueryCoinDeductionAgreeRequest {

    /**
        *      * 是否同意协议标识      * 1 同意协议      * 0 关闭协议      
     **/
    public $agree_flag;


    public function getAgreeFlag() : int{
        return $this->agree_flag;
    }

    public function setAgreeFlag(int $agreeFlag){
        $this->agree_flag = $agreeFlag;
    }


}

