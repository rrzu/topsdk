<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionOpenCoinDeductionOpenRequest;

class AlibabaIdleCoinCoindeductionOpenRequest {

    /**
        闲鱼币抵扣开启请求
     **/
    private $coinDeductionOpenRequest;


    public function getCoinDeductionOpenRequest() : AlibabaIdleCoinCoindeductionOpenCoinDeductionOpenRequest{
        return $this->coinDeductionOpenRequest;
    }

    public function setCoinDeductionOpenRequest(AlibabaIdleCoinCoindeductionOpenCoinDeductionOpenRequest $coinDeductionOpenRequest){
        $this->coinDeductionOpenRequest = $coinDeductionOpenRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.open";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionOpenRequest)) {
            $requestParam["coin_deduction_open_request"] = TopUtil::convertStruct($this->coinDeductionOpenRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

