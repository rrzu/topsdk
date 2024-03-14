<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleAutotradeIsvOrderStateProcessAutoTradeAPIParam;

class AlibabaIdleAutotradeIsvOrderStateProcessRequest {

    /**
        AutoTradeAPI通用入参
     **/
    private $autoTradeApiParam;


    public function getAutoTradeApiParam() : AlibabaIdleAutotradeIsvOrderStateProcessAutoTradeAPIParam{
        return $this->autoTradeApiParam;
    }

    public function setAutoTradeApiParam(AlibabaIdleAutotradeIsvOrderStateProcessAutoTradeAPIParam $autoTradeApiParam){
        $this->autoTradeApiParam = $autoTradeApiParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.autotrade.isv.order.state.process";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->autoTradeApiParam)) {
            $requestParam["auto_trade_api_param"] = TopUtil::convertStruct($this->autoTradeApiParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

