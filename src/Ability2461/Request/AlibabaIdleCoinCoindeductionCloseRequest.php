<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionCloseCoinDeductionCloseRequest;

class AlibabaIdleCoinCoindeductionCloseRequest {

    /**
        闲鱼币抵扣关闭请求
     **/
    private $coinDeductionCloseRequest;


    public function getCoinDeductionCloseRequest() : AlibabaIdleCoinCoindeductionCloseCoinDeductionCloseRequest{
        return $this->coinDeductionCloseRequest;
    }

    public function setCoinDeductionCloseRequest(AlibabaIdleCoinCoindeductionCloseCoinDeductionCloseRequest $coinDeductionCloseRequest){
        $this->coinDeductionCloseRequest = $coinDeductionCloseRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.close";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionCloseRequest)) {
            $requestParam["coin_deduction_close_request"] = TopUtil::convertStruct($this->coinDeductionCloseRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

