<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdTopVO {

    /**
        评价数据列表
     **/
    public $rate_list;


    public function getRateList() : array{
        return $this->rate_list;
    }

    public function setRateList(array $rateList){
        $this->rate_list = $rateList;
    }


}

