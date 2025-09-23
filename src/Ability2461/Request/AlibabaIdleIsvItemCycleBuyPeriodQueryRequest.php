<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodRequest;

class AlibabaIdleIsvItemCycleBuyPeriodQueryRequest {

    /**
        周期拍入参
     **/
    private $cycleBuyPeriodRequest;


    public function getCycleBuyPeriodRequest() : AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodRequest{
        return $this->cycleBuyPeriodRequest;
    }

    public function setCycleBuyPeriodRequest(AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodRequest $cycleBuyPeriodRequest){
        $this->cycleBuyPeriodRequest = $cycleBuyPeriodRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.cycle.buy.period.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cycleBuyPeriodRequest)) {
            $requestParam["cycle_buy_period_request"] = TopUtil::convertStruct($this->cycleBuyPeriodRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

