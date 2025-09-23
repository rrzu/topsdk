<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemCycleBuyActivityListCycleBuyActivityRequest;

class AlibabaIdleIsvItemCycleBuyActivityListRequest {

    /**
        入参
     **/
    private $cycleBuyActivityRequest;


    public function getCycleBuyActivityRequest() : AlibabaIdleIsvItemCycleBuyActivityListCycleBuyActivityRequest{
        return $this->cycleBuyActivityRequest;
    }

    public function setCycleBuyActivityRequest(AlibabaIdleIsvItemCycleBuyActivityListCycleBuyActivityRequest $cycleBuyActivityRequest){
        $this->cycleBuyActivityRequest = $cycleBuyActivityRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.cycle.buy.activity.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cycleBuyActivityRequest)) {
            $requestParam["cycle_buy_activity_request"] = TopUtil::convertStruct($this->cycleBuyActivityRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

