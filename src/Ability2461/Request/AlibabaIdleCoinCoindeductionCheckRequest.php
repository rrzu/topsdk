<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionCheckCoinDeductionCheckRequest;

class AlibabaIdleCoinCoindeductionCheckRequest {

    /**
        抵扣校验请求
     **/
    private $coinDeductionCheckRequest;


    public function getCoinDeductionCheckRequest() : AlibabaIdleCoinCoindeductionCheckCoinDeductionCheckRequest{
        return $this->coinDeductionCheckRequest;
    }

    public function setCoinDeductionCheckRequest(AlibabaIdleCoinCoindeductionCheckCoinDeductionCheckRequest $coinDeductionCheckRequest){
        $this->coinDeductionCheckRequest = $coinDeductionCheckRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.check";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionCheckRequest)) {
            $requestParam["coin_deduction_check_request"] = TopUtil::convertStruct($this->coinDeductionCheckRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

