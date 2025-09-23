<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionChangeCoinDeductionAgreeRequest;

class AlibabaIdleCoinCoindeductionChangeRequest {

    /**
        闲鱼币抵扣同意协议请求
     **/
    private $coinDeductionAgreeRequest;


    public function getCoinDeductionAgreeRequest() : AlibabaIdleCoinCoindeductionChangeCoinDeductionAgreeRequest{
        return $this->coinDeductionAgreeRequest;
    }

    public function setCoinDeductionAgreeRequest(AlibabaIdleCoinCoindeductionChangeCoinDeductionAgreeRequest $coinDeductionAgreeRequest){
        $this->coinDeductionAgreeRequest = $coinDeductionAgreeRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.change";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionAgreeRequest)) {
            $requestParam["coin_deduction_agree_request"] = TopUtil::convertStruct($this->coinDeductionAgreeRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

