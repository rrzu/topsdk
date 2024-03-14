<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdQry {

    /**
        业务id,一般是订单id
     **/
    public $bizid;


    public function getBizid() : string{
        return $this->bizid;
    }

    public function setBizid(string $bizid){
        $this->bizid = $bizid;
    }


}

