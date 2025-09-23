<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCoinCoindeductionItemQueryCoinDeductionItemRequest;

class AlibabaIdleCoinCoindeductionItemQueryRequest {

    /**
        商品id
     **/
    private $coinDeductionItemRequest;


    public function getCoinDeductionItemRequest() : AlibabaIdleCoinCoindeductionItemQueryCoinDeductionItemRequest{
        return $this->coinDeductionItemRequest;
    }

    public function setCoinDeductionItemRequest(AlibabaIdleCoinCoindeductionItemQueryCoinDeductionItemRequest $coinDeductionItemRequest){
        $this->coinDeductionItemRequest = $coinDeductionItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.coin.coindeduction.item.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coinDeductionItemRequest)) {
            $requestParam["coin_deduction_item_request"] = TopUtil::convertStruct($this->coinDeductionItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

