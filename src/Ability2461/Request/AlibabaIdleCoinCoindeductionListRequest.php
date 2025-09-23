<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionListCoinDeductionListRequest;

class AlibabaIdleCoinCoindeductionListRequest {

    /**
        闲鱼币抵扣列表
     **/
    private $coinDeductionListRequest;


    public function getCoinDeductionListRequest() : AlibabaIdleCoinCoindeductionListCoinDeductionListRequest{
        return $this->coinDeductionListRequest;
    }

    public function setCoinDeductionListRequest(AlibabaIdleCoinCoindeductionListCoinDeductionListRequest $coinDeductionListRequest){
        $this->coinDeductionListRequest = $coinDeductionListRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionListRequest)) {
            $requestParam["coin_deduction_list_request"] = TopUtil::convertStruct($this->coinDeductionListRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

