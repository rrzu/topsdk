<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyModifyCycleCountRequest;

class AlibabaIdleIsvItemCycleBuyModifyCycleInventoryRequest {

    /**
        入参
     **/
    private $cycleBuyModifyCycleCountRequest;


    public function getCycleBuyModifyCycleCountRequest() : AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyModifyCycleCountRequest{
        return $this->cycleBuyModifyCycleCountRequest;
    }

    public function setCycleBuyModifyCycleCountRequest(AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyModifyCycleCountRequest $cycleBuyModifyCycleCountRequest){
        $this->cycleBuyModifyCycleCountRequest = $cycleBuyModifyCycleCountRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.cycle.buy.modify.cycle.inventory";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cycleBuyModifyCycleCountRequest)) {
            $requestParam["cycle_buy_modify_cycle_count_request"] = TopUtil::convertStruct($this->cycleBuyModifyCycleCountRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

